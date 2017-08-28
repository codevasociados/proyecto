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
