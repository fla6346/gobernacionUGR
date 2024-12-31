<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;
use App\Models\Biblioteca;

class PdfController extends Controller
{
    //
    public function store(Request $request)
    {
    $request->validate([
        'file' => 'required|file|mimes:pdf,jpg,png|max:2048', // Adjust file types and size as needed
    ]);

    $file=$request->file('file');
    $fileName = time() . '_' . $file->getClientOriginalName();

    //$filePath=public_path('storage/app/Pdf/'.$file);
    $file->storeAs('Pdf', $fileName, 'public');
    if (file_exists($file)) {
        //$destinationP=storage_path('storage/app/Pdf/'.$file);
        //if (rename($file)) {
            return response()->json(['message' => 'PDF cargado con éxito'], 200);
        //} else {
          //  return response()->json(['message' => 'Error al mover el archivo'], 500);
        //}
    } else {
        return response()->json(['message' => 'El archivo no existe'], 404);
    }
    // Save the filename to the database
    $pdf=new Pdf();
    $pdf->file=$file;
    $pdf->save();
    //Pdf::create(['file'=>$file]);
    return response()->json(['message'=>'PDF cargado con exito','filePath'=>$filePath],200);
}
}
