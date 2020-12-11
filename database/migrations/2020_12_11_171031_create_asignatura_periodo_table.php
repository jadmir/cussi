<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaturaPeriodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura_periodo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_periodo');
            $table->unsignedBigInteger('id_asignatura');
            $table->unsignedBigInteger('dni_empleado');//por ahora docente_id
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_periodo')->references('id')->on('periodo');
            $table->foreign('id_asignatura')->references('id')->on('asignatura');
            $table->foreign('dni_empleado')->references('dni')->on('empleado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignatura_periodo');
    }
}
