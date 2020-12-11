<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriterioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criterio', function (Blueprint $table) {
            $table->id();
            $table->string('criterio', 100);
            $table->string('porcentaje', 100); //nose si es string o otro
            $table->unsignedBigInteger('id_asignatura');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_asignatura')->references('id')->on('asignatura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criterio');
    }
}
