<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Series extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id('ID_serie');
            $table->string('Título', 255);
            $table->text('Sinopsis')->nullable();
            $table->string('Género', 100)->nullable();
            $table->integer('Año_lanzamiento')->nullable();
            $table->string('Director', 255)->nullable();
            $table->string('Enlace_imagen', 255)->nullable();
            $table->float('Puntuación_media')->nullable();
            $table->integer('Cantidad_votos')->nullable();
            $table->integer('Temporadas')->nullable();
            $table->string('Estado_emisión')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
}
