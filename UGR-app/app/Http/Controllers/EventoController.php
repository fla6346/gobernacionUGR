<?php

namespace App\Http\Controllers;

use App\Models\EventoAdverso;
use Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
class EventoController extends Controller
{
    public function index()
    {
        return EventoAdverso::all();
        //return response()->json($eventos);
    }
    /*public function index():View
    {
        $eventos=DB::table('evento_adverso')->get();// select * from evento_adverso
        return view('evento.index',['eventos'=>$eventos]);
    }*/
    public function create():View
    {
        return view('evento.create');
    }
    public function createEvent(Request $request )
    {
        try{
       // return view('evento.create');
       $validatedData = $request->validate([
        //'nombre' => 'required|string|max:255',
        'tipo' => 'required|string',
        'provincia' => 'nullable|string|max:255',
        'municipio' => 'nullable|string|max:255',
        'fecha_inicio' => 'nullable|date',
        'fecha_finalizacion' => 'nullable|date',
        'hora' => 'nullable',
        'descripcion' => 'nullable|string',
        'area' => 'nullable|string|max:255',
    ]);
        $evento=EventoAdverso::create([
        'tipo' =>  $request->tipo,
        'provincia' =>  $request->provincia,
        'municipio' =>  $request-> municipio,
        'fecha_inicio' =>  $request-> fechaIni,
        'fecha_finalizacion' =>  $request->fechaFin,
        'hora' =>  $request->hora,
        'descripcion' =>  $request->descripcion,
        'area' =>  $request->area,
        ]);
        return response()->json([
            'message' => 'User successfully registered',
        ],201);
        }
        catch(ValidationException $e){
            return response()->json(['message' => $e-> validator->errors()], 422);
            }
    }

    public function getEvent(){
        return response()->json(EventoAdverso::all(),200);

    }
    public function getEventById($id){
        $evento=EventoAdverso::find($id);
        if(is_null($evento)){
            return response()->json(['message'=>'Evento no encontrado'],404);
        }
    }
    public function store(Request $request){
        //$evento = new EventoAdverso();
        return EventoAdverso::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $even = EventoAdverso::findOrFall($id);
        $even->nombreEvento=$request->nombre;
        //protected $fillable=['area','provincia','municipio','fecha_inicio','fecha_finalizacion','hora','descripcion','areaAfectada'];

    }
    public function listadeEventos(Request $request)
    {
        $year=$request->year;
        $month=$request->month;
        $query=DB::table('evento_adverso')->where("evento_adverso.habilitado",NULL)
        //->join('alerta','alerta.idEvento',"=","evento_adverso.idEvento")
        ->where("evento_adverso.fecha_inicio","%$year%");
        if($month){
            $query->whereMonth("evento_adverso.fecha_inicio","%$month%");
        }
        $query=$query->get();
        return response()->json([
            "listadeEventos"=>$query,
        ]);
    }

    public function delete($id)
    {
        $evento = EventoAdverso::find($id);

        if (is_null($evento)) {
            return response()->json(['message' => 'Evento no encontrado'], 404);
        }

        // Suponiendo que 'habilitado' es un campo booleano
        $evento->habilitado = 1; // o 0, dependiendo de cómo manejes los valores
        $evento->save();

        return response()->json(['message' => 'Evento desactivado con éxito'], 200);
    }
    public function downloadData()
    {
        $data = EventoAdverso::all(); // Obtén los datos de la base de datos

        // Convertir los datos a CSV
        $csvFileName = 'data.csv';
        $handle = fopen('php://output', 'w');
        fputcsv($handle, ['Column1', 'Column2', 'Column3']); // Encabezados

        foreach ($data as $row) {
            fputcsv($handle, [$row->column1, $row->column2, $row->column3]); // Datos
        }

        fclose($handle);

        return response()->stream(function () use ($handle) {
            fclose($handle);
        }, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
        ]);
    }
}
