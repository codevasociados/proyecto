<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('agenda', function (Blueprint $table) {
          $table->increments('id');
          $table->smalldatetime('FEC_INI_AGE');
          $table->smalldatetime('FEC_FIN_AGE');
          $table->time('HORA_INI_AGE');
          $table->time('HORA_FINI_AGE');

          $table->timestamps();

    $table->integer('ID_CONT')->unsigned();

    $table->foreign('ID_CONT')->references('id')->on('contrato');

    $table->integer('ID_CLIE')->unsigned();
    $table->foreign('ID_CLIE')->references('id')->on('cliente');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
