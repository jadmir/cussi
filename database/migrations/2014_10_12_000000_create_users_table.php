<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('dni', 8)->primary();
            $table->string('password', 150);
            $table->boolean('is_admin');
            $table->unsignedBigInteger('dni_apoderado');
            $table->unsignedBigInteger('dni_empleado');
            $table->boolean('is_activo')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('dni_apoderado')->references('dni')->on('apoderado');
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
        Schema::dropIfExists('users');
    }
}
