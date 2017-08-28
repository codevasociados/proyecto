<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastoHornoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasto_horno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DET_HOR', 100);
            $table->date('FEC_HOR');
            $table->time('HORA_HOR');
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
        Schema::dropIfExists('gasto_horno');
    }
}
