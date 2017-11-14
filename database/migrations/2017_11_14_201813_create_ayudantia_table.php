<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyudantiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudantia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad_horas');
            $table->integer('remuneracion');
            $table->integer('asignatura_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->integer('profesor_id')->unsigned();
            $table->foreign('asignatura_id')->references('id')->on('asignatura')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('alumno_id')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('profesor_id')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayudantia');
    }
}
