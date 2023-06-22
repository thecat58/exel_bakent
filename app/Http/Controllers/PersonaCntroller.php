<?php

namespace App\Http\Controllers;
use App\Models\cargaCertificados;
use App\Imports\MoraImport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class cargaCertificadosController extends Controller
{


 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Mora = cargaCertificados::all();
        return response()->json($Mora);
    }

   
}
