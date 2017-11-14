<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 20);
            $table->integer('rut');
            $table->string('correo', 50);
            $table->string('apellido_p', 20);
            $table->string('apellido_m', 20);
            $table->integer('matricula');
            $table->unique('rut');
            $table->unique('matricula');
            $table->integer('carrera_id')->unsigned();
            $table->integer('rol_id')->unsigned();
            $table->foreign('carrera_id')->references('id')->on('carrera')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
