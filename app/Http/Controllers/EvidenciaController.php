<?php

namespace App\Http\Controllers;

use App\Models\evidencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EvidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index($id)
{
    $evidencia = evidencia::findOrFail($id);

    // Obtener la ruta completa del archivo
    $rutaArchivo = storage_path('app/public/' . $evidencia->rutaEvidencia);

    // Verificar si el archivo existe
    if (!file_exists($rutaArchivo)) {
        return response()->json(['message' => 'El archivo no existe'], 404);
    }

    // Leer el contenido del archivo
    $contenido = file_get_contents($rutaArchivo);

    // Generar la respuesta con el contenido del archivo y el tipo de contenido adecuado
    $response = response($contenido, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="' . $evidencia->nombre . '"'
    ]);

    return $response;
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = $file->getClientOriginalName();
                $filePath = 'evidencia/' . $fileName; // Aseguramos que la ruta sea "evidencia/nombreDelArchivo"
                $file->storeAs('public', $filePath); // Solo necesitamos guardar el nombre del archivo dentro de la carpeta public

                $evidencia = new Evidencia();
                $evidencia->nombre = $request->input('nombre');
                $evidencia->descripcion = $request->input('descripcion');
                $evidencia->codigo = $request->input('codigo');
                $evidencia->rutaEvidencia = $filePath;
                $evidencia->idResultado = $request->input('idResultado');
                $evidencia->save();

                return response()->json(['message' => 'Importación completada']);
            } else {
                return response()->json(['message' => 'No se proporcionó ningún archivo'], 400);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\evidencia  $evidencia
     * @return \Illuminate\Http\Response
     */
    // public function show(evidencia $evidencia)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\evidencia  $evidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, evidencia $evidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\evidencia  $evidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(evidencia $evidencia)
    {
        //
    }
}
