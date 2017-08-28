<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastoSucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasto_suc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DET_GASTO', 100);
            $table->date('FECH_GASTO');
            $table->time('HORA_GASTO');
            $table->integer('ID_ADM')->unsigned();
            $table->foreign('ID_ADM')->references('id')->on('administrador')->onDelete('cascade');
            $table->integer('ID_SUC')->unsigned();
            $table->foreign('ID_SUC')->references('id')->on('sucursal')->onDelete('cascade');
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
         Schema::dropIfExists('gasto_suc');
    }
}
