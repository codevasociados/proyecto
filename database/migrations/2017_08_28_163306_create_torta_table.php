<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTortaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('PREC_TORTA');
            $table->string('TAM_TORTA');
            $table->string('COLOR_TORTA');
            $table->string('TIPO_TORTA');
            $table->string('DES_TORTA');
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
         Schema::dropIfExists('torta');
    }
}
