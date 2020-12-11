<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utiles', function (Blueprint $table) {
            $table->id();
            $table->date('anio');
            $table->unsignedBigInteger('id_grado');
            $table->string('url_lista');
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('utiles');
    }
}
