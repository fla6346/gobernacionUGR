<?php

namespace App\Http\Controllers;
use App\Models\Image;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request){
    $request->validate([
        'path'=>'mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    if($request->file('image')){
        $path=$request->file('image')->store('images','public');
        $image = Image::create(['path' => $path]);
        $sourcePath = storage_path('app/public/images' . $path); // Ruta de la imagen original
        $destinationPath = storage_path('app/public/images/' . basename($path)); // Ruta de destino

        // Asegúrate de que la carpeta de destino existe
        if (!file_exists(dirname($destinationPath))) {
            mkdir(dirname($destinationPath), 0755, true);
        }

        // Copiar el archivo
        if (copy($sourcePath, $destinationPath)) {
            return response()->json(['message' => 'Image uploaded and copied successfully', 'path' => $image->path], 200);
        } else {
            return response()->json(['error' => 'Image uploaded but failed to copy'], 500);
        }
        return response()->json(['message'=>'Image uploaded successfully','path'=>$path],200);
    }
    return response()->json(['error'=>'FIle not Upload'],400);
    }
}
