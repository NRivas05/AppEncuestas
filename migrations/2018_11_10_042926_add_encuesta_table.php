<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEncuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('manzTrabajadas');
            $table->integer('manzPositivas');
            $table->integer('vivTrabajadas');
            $table->integer('vivPositivas');
            $table->integer('depInspeccionados');
            $table->integer('abatizados');
            $table->integer('eliminados');
            $table->integer('destruidos');
            $table->integer('abateGastado');
            $table->integer('A1');
            $table->integer('A2');
            $table->integer('B');
            $table->integer('C');
            $table->integer('D1');
            $table->integer('D2');
            $table->integer('E');
            $table->integer('total');
            $table->integer('totalPositivos');
            $table->integer('estado');
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
        Schema::dropIfExists('encuesta');
    }
}
