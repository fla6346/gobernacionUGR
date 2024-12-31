<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ResponsableController extends Controller
{
    //
    public function index()
    {
        $responsable= Responsable::latest()->get();
        return response()->json($responsable,Response::HTTP_OK);
    }
    public function store(Request $request)
    {

    }
    public function show(string $id)
    {

    }
    public function update(Request $request, string $id){

    }
    public function destroy(string $id){

    }
}
