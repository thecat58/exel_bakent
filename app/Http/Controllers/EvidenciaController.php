<?php

namespace App\Http\Controllers;

use App\Models\evidencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class EvidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

     public function index()
     {
         $evidencias = evidencia::all();
     
         return $evidencias;
     
     }

     public function verDocumento($id)
     {
         $documento = evidencia::findOrFail($id);
     
         // Obtener la ruta completa del archivo
         $rutaArchivo = storage_path('app/public/' . $documento->rutaEvidencia);
     
         // Verificar si el archivo existe
         if (!file_exists($rutaArchivo)) {
             return response()->json(['message' => 'El archivo no existe'], 404);
         }
     
         // Leer el contenido del archivo
         $contenido = file_get_contents($rutaArchivo);
     
         // Generar la respuesta con el contenido del archivo y el tipo de contenido adecuado
         $response = response($contenido, 200, [
             'Content-Type' => 'application/pdf',
             'Content-Disposition' => 'inline; filename="' . $documento->nombre . '"'
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
    public function show(evidencia $evidencia)
    {
        //
    }

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
    public function destroy($id)
{
    // Buscar el registro de la evidencia por su ID
    $evidencia = evidencia::find($id);

    // Verificar si el registro existe
    if (!$evidencia) {
        return response()->json(['message' => 'Registro no encontrado'], 404);
    }

    // Obtener la ruta completa del archivo
    $rutaArchivo = storage_path('app/public/' . $evidencia->rutaEvidencia);

    // Verificar si el archivo existe y eliminarlo
    if (file_exists($rutaArchivo)) {
        unlink($rutaArchivo);
    }

    // Eliminar el registro de la base de datos
    $evidencia->delete();

    // Retornar una respuesta con el mensaje de éxito
    return response()->json(['message' => 'Registro y archivo eliminados correctamente'], 200);
}
}
