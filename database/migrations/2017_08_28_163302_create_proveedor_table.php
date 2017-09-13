<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('proveedor', function (Blueprint $table) {
          $table->increments('id');
          $table->string('NOM_PROV');
          $table->string('PAT_PROV');
          $table->string('MAT_PROV');
          $table->integer('TEL_PROV');
          $table->string('DIR_PROV');
          $table->integer('EMPRESA_PROV');
          $table->string('PROD_PROV');
          $table->text('DET_PROV');
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
        Schema::dropIfExists('proveedor');
    }
}
