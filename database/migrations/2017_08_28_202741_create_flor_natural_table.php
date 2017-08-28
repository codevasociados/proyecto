<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlorNaturalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('flor_natural', function (Blueprint $table) {
          $table->increments('id');
          $table->string('TAM_FLOR_NAT');
          $table->string('EST_FLOR_NAT');
          $table->float('PRE_FLOR_NAT');
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
        Schema::dropIfExists('flor_natural');
    }
}
