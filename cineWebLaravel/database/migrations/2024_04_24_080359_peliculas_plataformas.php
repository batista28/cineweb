<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PeliculasPlataformas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas_plataformas', function (Blueprint $table) {
            $table->id('ID_película_plataforma');
            $table->unsignedBigInteger('ID_película');
            $table->unsignedBigInteger('ID_plataforma');
            $table->foreign('ID_película')->references('id')->on('peliculas');
            $table->foreign('ID_plataforma')->references('ID_plataforma')->on('plataformas_streaming')->onDelete('cascade');
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
        Schema::dropIfExists('peliculas_plataformas');
    }
}
