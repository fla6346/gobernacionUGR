<?php

namespace App\Http\Controllers;

use App\Models\Alerta;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AlertaController extends Controller
{
    public function store(Request $request )
    {
        try{
       // return view('evento.create');
       $validatedData = $request->validate([
        //'nombre' => 'required|string|max:255',
        'mensaje' => 'required|string',
        'nivel' => 'nullable|string|max:255',
        'fecha' => 'nullable|date',
        'estado' => 'nullable|date',

    ]);
        $evento=Alerta::create([
        'mensaje' =>  $request-> mensaje,
        'nivel' =>  $request->nivel,
        'fecha' =>  $request-> fecha,
        'estado' =>  $request->descripcion,
        ]);
        return response()->json([
            'message' => 'User successfully registered',
        ],201);
        }
        catch(ValidationException $e){
            return response()->json(['message' => $e-> validator->errors()], 422);
            }
    }
    //
}
