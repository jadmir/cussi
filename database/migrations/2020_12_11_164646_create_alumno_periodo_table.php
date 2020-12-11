<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoPeriodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_periodo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_periodo');
            $table->unsignedBigInteger('id_grado');
            $table->unsignedBigInteger('dni_alumno');
            $table->string('url_dni');
            $table->boolean('is_completo')->default(true);
            $table->string('pago_valido');
            $table->string('condicion_final');// nose si esta bien
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_periodo')->references('id')->on('periodo');
            $table->foreign('id_grado')->references('id')->on('grado');
            $table->foreign('dni_alumno')->references('dni')->on('alumno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_periodo');
    }
}
