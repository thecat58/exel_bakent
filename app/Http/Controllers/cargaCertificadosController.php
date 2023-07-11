<?php

namespace App\Http\Controllers;

use App\Models\cargaCertificados;
use App\Imports\MoraImport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
    //reporte 1

    public function reporte1(string $identificacion)
    {
    
        $datos = cargaCertificados::where('identificacion', $identificacion)->first();

        if (!$datos) {
            // Manejar el caso cuando no se encuentra el registro
            return response()->json(['message' => 'No se encontró ningún registro con la identificación especificada.']);
        }

        $datosArray = $datos->toArray();

        $pdf = PDF::loadView('reporte', $datosArray);
        return $pdf->stream();
    }
    public function report(Request $request)
    {
        $identificacion = $request->input('identificacion');

        $datos = cargaCertificados::where('identificacion', $identificacion)->first();

        if (!$datos) {
            // Manejar el caso cuando no se encuentra el registro
            return response()->json(['message' => 'No se encontró ningún registro con la identificación especificada.']);
        }

        $datosArray = $datos->toArray();

        $pdf = PDF::loadView('reporte2', $datosArray);
        return $pdf->stream();
    }

    public function ejecutarProcedimiento()
    {
        DB::select('CALL bloqueo_mora()');
        return response()->json('operacion realizada con exitoo!');
    }


    public function import()
    {
        Excel::import(new MoraImport, request()->file('documento'));
        return response()->json(['message' => 'Importación completada']);
        return response()->json(['error' => 'Mensaje de error'], 400);
    }
}
