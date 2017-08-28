<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NOM_EMP');
            $table->string('PAT_EMP');
            $table->string('MAT_EMP');
            $table->string('DIR_EMP');
            $table->string('CI_EMP');
            $table->integer('TEL_EMP');
            $table->string('CARGO_EMP');
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('empleado');    
     }    

}