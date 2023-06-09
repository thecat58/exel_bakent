<?php

namespace App\Http\Controllers;
use App\Models\cargaCertificados;
use App\Imports\MoraImport;
use Maatwebsite\Excel\Facades\Excel;

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

    public function import()
    {
        Excel::import(new MoraImport, request()->file('documento'));
        return response()->json(['message' => 'Importación completada']);
    }
}
