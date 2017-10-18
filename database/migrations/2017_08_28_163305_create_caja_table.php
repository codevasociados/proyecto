<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('caja', function (Blueprint $table) {
          $table->increments('id');
          $table->string('DES_CAJ');
          $table->string('EST_CAJ');
          $table->float('PRE_CAJ');
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
        Schema::dropIfExists('caja');
    }
}
