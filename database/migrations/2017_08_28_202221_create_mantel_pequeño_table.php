<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantelPeque�oTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mantel_pequeño', function (Blueprint $table) {
          $table->increments('id');
          $table->string('COL_MAN_PEQUE');
          $table->string('EST_MAN_PEQUE');
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
        Schema::dropIfExists('mantel_pequeño');
    }
}
