<?php
namespace App\Http\Controllers;
use App\Exports\MoraExport;
use App\Models\cargaCertificados;
use App\Imports\Nomina;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
class cargarCertificadosController extends Controller
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
        // Excel::import(new Nomina, request()->file('documento'));
        return response()->json(['message' => 'Importación completada']);
    }





}
