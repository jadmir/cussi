<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoPeriodoCriterioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_periodo_criterio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_periodo_id');
            $table->unsignedBigInteger('id_criterio');
            $table->string('bimestre', 100);
            $table->string('nota', 100);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('alumno_periodo_id')->references('id')->on('alumno_periodo');
            $table->foreign('id_criterio')->references('id')->on('criterio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_periodo_criterio');
    }
}
