<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('sucursal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('NRO_SUC');
            $table->string('DIR_SUC', 200);
            $table->integer('TEL_SUC');
            $table->integer('ID_ADM')->unsigned();
            $table->foreign('ID_ADM')->references('id')->on('administrador')->onDelete('cascade');
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
        Schema::dropIfExists('sucursal');
    }
}
