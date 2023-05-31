<?php

namespace App\Http\Controllers;

use App\Models\certificacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= certificacion::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request-> all();
        $certificacion=new certificacion($data);
        $certificacion->save();
        return response()->json(['message'=>'la certificacion se guardo']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function show(certificacion $certificacion)
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
    public function update(Request $request, certificacion $certificacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\certificacion  $certificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(certificacion $certificacion)
    {
        //
    }
}
