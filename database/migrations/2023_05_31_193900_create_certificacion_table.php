<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificacion', function (Blueprint $table) {
            $table->increments('id');
            $table->INTEGER('identificacion');
            $table->INTEGER('concepto');
            $table->date('fecha acumula');
            $table->date('fecha inicio');
            $table->date('fecha fin');
            $table->BigInt('valor total');
            
            

            $table->string('nombre');
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
