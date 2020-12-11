<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApoderadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoderado', function (Blueprint $table) {
            $table->string('dni', 8)->primary();
            $table->string('ap_paterno', 100);
            $table->string('ap_materno', 100);
            $table->string('nombres', 100);
            $table->string('sexo', 15);
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->string('email', 150);
            $table->text('observaciones');
            $table->string('celular', 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apoderado');
    }
}
