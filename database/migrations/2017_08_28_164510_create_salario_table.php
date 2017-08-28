<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('salario', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('SAL_MAX');
          $table->integer('SAL_MIN');
          $table->integer('DESC_SAL');
          $table->integer('ADELANTO_SAL');
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
