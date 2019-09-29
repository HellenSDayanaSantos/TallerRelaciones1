<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{

    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->text('sipnosis');
            $table->string('duracion');
            $table->string('clasificacion');
            $table->string('puntuacion');
            $table->bigInteger('doblaje_id')->unsigned();
            $table->foreign('doblaje_id')->references('id')->on('doblajes');     
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
