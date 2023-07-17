<?php

namespace App\Http\Controllers;

use App\Models\evidencia;
use Illuminate\Http\Request;


class EvidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $evidencia = evidencia::findOrFail($id);

    $rutaArchivo = storage_path('app/public/evidencia' . $evidencia->rutaEvidencia);

    if (!file_exists($rutaArchivo)) {
        return response()->json(['message' => 'El archivo no existe'], 404);
    }

    $contenido = file_get_contents($rutaArchivo);

    // Obtener el tipo MIME del archivo para devolver la respuesta adecuada
    $mimeType = mime_content_type($rutaArchivo);

    // Generar la respuesta con el contenido del archivo y el tipo de contenido adecuado
    $response = response($contenido, 200, [
        'Content-Type' => $mimeType,
        'Content-Disposition' => 'inline; filename="' . $evidencia->nombre . '"'
    ]);

    // Agregar la URL de visualización al registro de evidencia
    $evidencia->url_visualizacion = route('evidencias.visualizar', ['id' => $evidencia->id]);

    // Devolver el registro de evidencia junto con la URL de visualización en formato JSON
    return response()->json($evidencia);
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
                $filePath = 'evidencia' . $fileName;
                $file->storeAs('public' . $filePath, $fileName);
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
