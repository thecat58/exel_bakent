<?php

namespace App\Imports;

use App\Models\cargaCertificados;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MoraImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new cargaCertificados([

           'id' => $row['id'] ?? null,
            'identificacion' => $row['identificacion'] ?? null,
            'concepto' => $row['concepto'] ?? null,
            'tipoNomina' => $row['tiponomina'],
            // 'fechaAcumula' => $row['fechaacumula'],
            // 'fechaInicio' => $row['fechainicio'],
            // 'fechaFin' => $row['fechafin'],
            'fechaAcumula' => $this->parseDate($row['fechaacumula']),
            'fechaInicio' => $this->parseDate($row['fechainicio']),
            'fechaFin' => $this->parseDate($row['fechafin']),
            'valorTotal' => $row['valortotal'],
            'valorReal' => $row['valorreal'],
            'nombres' => $row['nombres'],
            'apellidos' => $row['apellidos'],
            'nombreCompletos' => $row['nombrecompletos'],
            'descripcionCentroTrabajo' => $row['descripcioncentrotrabajo'] ?? null,
            'descripcioncentroCosto' => $row['descripcioncentrocosto'] ?? null,
            'descripcionClaseNomina' => $row['descripcionclasenomina'] ?? null,
            'nombreCargo' => $row['nombrecargo'] ?? null,



        ]);
    }



    // private function parseDate($date)
    // {
    //     if (!empty($date)) {
    //         $date = str_replace('/', '-', $date);
    //         return Carbon::createFromFormat('d-m-Y 0:00', $date)->toDateTimeString();
    //     }

    //     return null;
    // }

    private function parseDate($date)
    {
        if (!empty($date)) {
            return Carbon::parse($date)->format('Y-m-d H:i:s');
        }

        return null;
    }

}
