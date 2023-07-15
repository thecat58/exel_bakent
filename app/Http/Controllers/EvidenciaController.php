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
    public function index()
    {
        $files = [];
        // return view ('files',["files"=>$files]);
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
                $filePath = 'evidencia/' . $fileName;
                $file->storeAs('public/' . $filePath, $fileName);
    
                // Crear y guardar el registro en la base de datos
                $evidencia = new Evidencia();
                $evidencia->nombre = $request->input('nombre');
                $evidencia->descripcion = $request->input('descripcion');
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
    public function destroy(evidencia $evidencia)
    {
        //
    }
}
