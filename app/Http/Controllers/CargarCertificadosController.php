<?php

namespace App\Http\Controllers;

use App\Models\cargarCertificados;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DatosExport; 

class cargarCertificadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function show(cargarCertificados $certificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cargarCertificados $certificacion)
    {
        //
    }

    public function importar (Request $request){
        if ($request-> hasFile('documento')){
            $path=$request->file('documento')->getRealPath();
            $datos=Excel::load($path, function($reader){
            })->get();

            if (!empty($datos) && $datos->count()){
                $datos=$datos->toArray();
                for($i=0; $i< count($datos); $i++){
                    $datosImportar[]=$datos[$i];
                }
            }

            cargarCertificados::insert($datosImportar);
        }

        return back();
    }
}
