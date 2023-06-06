<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caregarCertificados', function (Blueprint $table) {
            $table->increments('id');
            $table->INTEGER('identificacion');
            $table->INTEGER('concepto');
            $table->string('tipoNomina');
            $table->date('fechaAcumula');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->double('valorTotal');
            $table->double('valorReal');       
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('nombreCompletos');
            $table->string('descripcionCentroTrabajo');
            $table->string('descripciónCentroCosto');
            $table->string('descripciónClaseNómina');
            $table->string('nombreCargo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificacion');
    }
}
