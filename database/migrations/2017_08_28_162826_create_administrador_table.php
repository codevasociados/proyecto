<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NOM_ADM');
            $table->string('PAT_ADM');
            $table->string('MAT_ADM');
            $table->string('DIR_ADM');
            $table->string('CI_ADM');
            $table->integer('TEL_ADM');
            $table->string('NIVEL_ADM');
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
        Schema::dropIfExists('administrador');       
    }
}
