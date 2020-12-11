<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->string('dni', 8)->primary();
            $table->string('ap_paterno', 100);
            $table->string('ap_materno', 100);
            $table->string('nombres', 100);
            $table->string('sexo', 15);
            $table->date('fecha_nacimiento');
            $table->unsignedBigInteger('apoderado_dni');
            $table->unsignedBigInteger('id_grado');
            $table->text('observaciones');
            $table->string('condicion', 100);//no se si string o boleano
            $table->string('url_foto');
            $table->string('url_dni');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('apoderado_dni')->references('dni')->on('apoderado');
            $table->foreign('id_grado')->references('id')->on('grado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
