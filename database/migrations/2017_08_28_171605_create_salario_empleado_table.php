<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalarioEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salario_empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->date('FECH_SE');
            $table->time('HORA_SE');
            $table->integer('ID_ADM')->unsigned();
            $table->foreign('ID_ADM')->references('id')->on('administrador')->onDelete('cascade');
            $table->integer('ID_SUC')->unsigned();
            $table->foreign('ID_SUC')->references('id')->on('sucursal')->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('salario_empleado');
    }
}
