<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            $table->increments('id');
            $table->date('FECH_INI');
            $table->time('HORA_INI');
            $table->date('FECH_ENT');
            $table->time('HORA_ENT');
            $table->integer('CANT_CONT');
            $table->string('LUGAR_CONT', 60);
            $table->string('DIR_CLIE', 60);

            $table->integer('ID_PED')->unsigned();
            $table->foreign('ID_PED')->references('id')->on('pedestal');

            $table->integer('ID_GAS')->unsigned();
            $table->foreign('ID_GAS')->references('id')->on('gasa');

            $table->integer('ID_MAN_PEQUE')->unsigned();
            $table->foreign('ID_MAN_PEQUE')->references('id')->on('mantelito');

            $table->integer('ID_FLOR_ART')->unsigned();
            $table->foreign('ID_FLOR_ART')->references('id')->on('flor_artificial');

            $table->integer('ID_FUE_AGU')->unsigned();
            $table->foreign('ID_FUE_AGU')->references('id')->on('fuente_agua');

            $table->integer('ID_NOVI')->unsigned();
            $table->foreign('ID_NOVI')->references('id')->on('novios');

            $table->integer('ID_PEC')->unsigned();
            $table->foreign('ID_PEC')->references('id')->on('pecera');

            $table->integer('ID_CIN')->unsigned();
            $table->foreign('ID_CIN')->references('id')->on('cinta');









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
         Schema::dropIfExists('contrato');
     }
}
