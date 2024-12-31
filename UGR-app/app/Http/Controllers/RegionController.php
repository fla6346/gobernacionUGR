<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RegionController extends Controller
{
    //
    public function store(Request $request )
    {
        try{
       // return view('evento.create');
       $validatedData = $request->validate([
        'nombreRegion' => 'required|string|max:255',


    ]);
        $evento=Region::create([
        'nombreRegion' =>  $request-> nombreRegion,

        ]);
        return response()->json([
            'message' => 'User successfully registered',
        ],201);
        }
        catch(ValidationException $e){
            return response()->json(['message' => $e-> validator->errors()], 422);
            }
    }
}
