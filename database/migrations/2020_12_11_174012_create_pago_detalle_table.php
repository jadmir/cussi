<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_detalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pago');
            //$table->unsignedBigInteger('id_concepto');
            $table->double('precio_unitario');
            $table->string('cantidad');
            $table->double('total');
            $table->timestamps();

            $table->foreign('id_pago')->references('id')->on('pago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_detalle');
    }
}
