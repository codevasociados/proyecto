<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('promocion', function (Blueprint $table) {
            $table->increments('id');
            $table->date('FECH_INI');
            $table->date('FECH_FIN');
            $table->string('DES_PROM');
            $table->integer('CANT_PROM');
            $table->string('OFERTA_PROM');
            $table->integer('ID_CLIE')->unsigned();
            $table->foreign('ID_CLIE')->references('id')->on('cliente')->onDelete('cascade');
            $table->integer('ID_VEN')->unsigned();
            $table->foreign('ID_VEN')->references('id')->on('venta')->onDelete('cascade');
            $table->integer('ID_TORTA')->unsigned();
            $table->foreign('ID_TORTA')->references('id')->on('torta')->onDelete('cascade');
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
        Schema::dropIfExists('promocion');
    }
}
