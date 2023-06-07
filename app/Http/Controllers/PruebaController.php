<?php

namespace App\Http\Controllers;
use App\Exports\MoraExport;
use App\Models\cargaCertificados;
use App\Imports\MoraImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PruebaController extends Controller
{


 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculosMora = cargaCertificados::all();
        return response()->json($vehiculosMora);

    }

    public function import()
    {
        Excel::import(new MoraImport, request()->file('documento'));
        return response()->json(['message' => 'Importación completada']);
    }
}
