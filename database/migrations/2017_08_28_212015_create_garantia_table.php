<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarantiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('garantia', function (Blueprint $table) {
          $table->increments('id');
          $table->float('MON_GAR');
          $table->timestamps();

          $table->integer('ID_CLIE')->unsigned();
          $table->foreign('ID_CLIE')->references('id')->on('cliente');

          $table->integer('ID_PED')->unsigned();
          $table->foreign('ID_PED')->references('id')->on('pedestal');

          $table->integer('ID_GAS')->unsigned();
          $table->foreign('ID_GAS')->references('id')->on('gasa');

          $table->integer('ID_MAN_PEQUE')->unsigned();
          $table->foreign('ID_MAN_PEQUE')->references('id')->on('mantelito');

          $table->integer('ID_FLOR_ART')->unsigned();
          $table->foreign('ID_FLOR_ART')->references('id')->on('flor_artificial');

          $table->integer('ID_NOV')->unsigned();
          $table->foreign('ID_NOV')->references('id')->on('novios');

          $table->integer('ID_PEC')->unsigned();
          $table->foreign('ID_PEC')->references('id')->on('pecera');

          $table->integer('ID_CIN')->unsigned();
          $table->foreign('ID_CIN')->references('id')->on('cinta');

          $table->integer('ID_FUE_AGU')->unsigned();
          $table->foreign('ID_FUE_AGU')->references('id')->on('fuente_agua');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garantia');
    }
}
