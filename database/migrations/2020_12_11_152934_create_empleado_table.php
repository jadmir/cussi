<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('dni, 8')->primary();
            $table->string('ap_paterno', 100);
            $table->string('ap_materno', 100);
            $table->string('nombres', 100);
            $table->string('sexo', 15);
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->unsignedBigInteger('id_grado');
            $table->unsignedBigInteger('id_cargo');
            $table->string('celular', 20);
            $table->string('email', 150);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_grado')->references('id')->on('grado');
            $table->foreign('id_cargo')->references('id')->on('cargo');
        });
    }

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
