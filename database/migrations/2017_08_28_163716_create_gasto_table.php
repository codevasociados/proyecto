<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DESC_GASTO', 100);
            $table->integer('MONTO_GASTO');
            $table->timestamps();

            $table->integer('ID_HOR')->unsigned();
            $table->foreign('ID_HOR')->references('id')->on('gasto_horno');

            $table->integer('ID_GASTO')->unsigned();
            $table->foreign('ID_GASTO')->references('id')->on('gasto_sucursal');

            $table->integer('ID_HAR')->unsigned();
            $table->foreign('ID_HAR')->references('id')->on('harina');

            $table->integer('ID_HUE')->unsigned();
            $table->foreign('ID_HUE')->references('id')->on('huevo');

            $table->integer('ID_AZU')->unsigned();
            $table->foreign('ID_AZU')->references('id')->on('azucar');

            $table->integer('ID_LAC')->unsigned();
            $table->foreign('ID_LAC')->references('id')->on('lacteos');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('gasto');
    }
}
