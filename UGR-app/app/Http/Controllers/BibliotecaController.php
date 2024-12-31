<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca as BibliotecaModel;
use Exception;
use Illuminate\Http\Request;
use App\Http\Responses\ApiResponse;
use Faker\Provider\Biased;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Stmt\Foreach_;
use Spatie\FlareClient\Api;

class BibliotecaController extends Controller
{
    //
    public function index(){
        try{
            $biblioteca = BibliotecaModel::all();
            return response()->json($biblioteca);
        }catch(Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function store(Request $request)
    {
        //dd($request->all());
        try {
            // Validar la solicitud
            $validator = Validator::make($request->all(), [
                'fileName' => 'required|file|mimes:pdf|max:2048', // Asegúrate de que sea un archivo PDF y no exceda 2MB
            ]);

            if ($validator->fails()) {
                return ApiResponse::error('Error de validación', 401, $validator->errors()->toArray());
            }

            $file = $request->file('fileName');
            if(!$file){
                return ApiResponse::error('no hay archivo',400);
            }
            $fileName = time() . "." . $file->getClientOriginalExtension();
            //$destinationPath = public_path('uploads');
            $destinationPath =public_path('Externo');
            //'../../../../Externo';

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
            try {
            $file->move($destinationPath, $fileName);
            } catch (Exception $e) {
                \Log::error('Error al mover el archivo a uploads: ' . $e->getMessage());
                return ApiResponse::error('Error al subir el archivo a uploads', 500);
            }

            $biblio = BibliotecaModel::create([
                'fileName' => 'Externo/'.$fileName, // Almacenar la ruta del archivo
            ]);

            return ApiResponse::success('El archivo se subió correctamente', 201,[
                'url' => url('Externo/' . $fileName) // Devuelve la URL del archivo
            ]);
        } catch (Exception $e) {
            // Registrar la excepción para depuración
            \Log::error('Error en la base de datos: ' . $e->getMessage());
            return ApiResponse::error('Error en la base de datos', 500);
        }
    }
    public Function listFiles(){
        $directory = public_path('Externo'); // Ruta de la carpeta
        $files = File::files($directory);
        $pdfFiles = [];
        foreach($files as $file){
            if($file->getExtension() ==='pdf'){
                $pdfFiles[] =[
                    'name'=> $file->getFilename(),
                    'url' => url('Externo/'.$file->getFilename()),
                    //Log::info('URL del archivo: ' . url('Externo/'.$file->getFilename()));
                ];
            }
        }
        return ApiResponse::success('Lista de archivos',200,$pdfFiles);
    }
    public Function show($id){
        try{
            $biblioteca=BibliotecaModel::where(['id'=>$id])->firstOrFail();
            return ApiResponse::success('libros en muestra', 200, $biblioteca);
        } catch (ModelNotFoundException $e) {
            return ApiResponse::error('Equipo no encontrado', 404);
        } catch (Exception $e){
            return ApiResponse::error('Error en la base de datos', 500);
        }
    }
    public function update(Request $request, $id){
        try{
            $biblioteca=BibliotecaModel::where(['idBiblioteca'=>$id])->firstOrFail();
            $nombre=$biblioteca->direccion;
            $request->validate([
                'idBiblioteca'=>['required',Rule::unique('idBiblioteca')->ignore('biblioteca')],
                'nombre'=>'require',
                'direccion'=>'required'
            ],
            [
                'nombre.equired'=>'el nombr del archivo es requerido ',
                'direccion.required'=>'la imagen es requerida',
            ]);
            if($nombre){
                @unlink(public_path('direccion/'.$nombre));
            }
            $f = $request->file('direccion');

            $direccion = time() . "." . $f->getClientOriginalExtension();

            $f->move(public_path("direccion"), $direccion);

            $biblioteca->nombre = $request->nombre;
            $biblioteca->direccion = $request->direccion;
            $biblioteca->imagen = $direccion;
            $biblioteca->update();


            return ApiResponse::success('El equipo se actualizo correctamente', 202);

        } catch (ModelNotFoundException $e) {
            return ApiResponse::error('Equipo no encontrado', 404);
        } catch (ValidationException $e){
            $errors = $e->validator->errors()->toArray();
            return ApiResponse::error('Error de validacion', 401, $errors);
        } catch (Exception $e){
            return ApiResponse::error('Error en la base de datos', 500);
        }
        }
        public function destroy($id)
        {
            try {
                //$biblioteca = BibliotecaModel::where(['id' => $id])->firstOrFail();
                $biblioteca = BibliotecaModel::findOrFail($id);
                if (!$biblioteca) {
                    return response()->json(['message' => 'Archivo eliminado con éxito']);
                }
                $biblioteca->delete();
                return ApiResponse::success('libro eliminado', 200);
            } catch (ModelNotFoundException $e) {
                return ApiResponse::error('libro no encontrado', 404);
            } catch (Exception $e){
                return ApiResponse::error('Error en la base de datos', 500);
            }
        }

        /*$directory = public_path('Externo'); // Ruta de la carpeta
        $files = File::files($directory);
        $pdfFiles = [];
        foreach($files as $file){
            if($file->getExtension() ==='pdf'){
                $pdfFiles[] =[
                    'name'=> $file->getFilename(),
                    'url' => url('Externo/'.$file->getFilename()),
                    //Log::info('URL del archivo: ' . url('Externo/'.$file->getFilename()));
                ];
            }
        }
        return ApiResponse::success('Lista de archivos',200,$pdfFiles);
    }*/
    }


