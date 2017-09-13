<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->increments('id');
            $table->date('FECH_VEN');
            $table->time('HORA_VEN');
            $table->integer('CANT_VEN');
            $table->string('DES_VEN', 100);

            $table->integer('ID_CONT')->unsigned();
            $table->foreign('ID_CONT')->references('id')->on('contrato')->onDelete('cascade');

            $table->integer('ID_CLIE')->unsigned();
            $table->foreign('ID_CLIE')->references('id')->on('cliente')->onDelete('cascade');

            $table->integer('ID_EMP')->unsigned();
            $table->foreign('ID_EMP')->references('id')->on('empleado')->onDelete('cascade');

            $table->integer('ID_SUC')->unsigned();
            $table->foreign('ID_SUC')->references('id')->on('sucursal')->onDelete('cascade');

            $table->integer('ID_DES')->unsigned();
            $table->foreign('ID_DES')->references('id')->on('descuento')->onDelete('cascade');

            $table->integer('ID_VEL')->unsigned();
            $table->foreign('ID_VEL')->references('id')->on('velas')->onDelete('cascade');

            $table->integer('ID_REG')->unsigned();
            $table->foreign('ID_REG')->references('id')->on('regalos')->onDelete('cascade');

            $table->integer('ID_CAJ')->unsigned();
            $table->foreign('ID_CAJ')->references('id')->on('caja')->onDelete('cascade');

            $table->integer('ID_TORTA')->unsigned();
            $table->foreign('ID_TORTA')->references('id')->on('torta')->onDelete('cascade');

            $table->timestamps();



        });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
