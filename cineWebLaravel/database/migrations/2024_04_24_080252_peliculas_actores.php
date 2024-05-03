<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PeliculasActores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('películas_actores', function (Blueprint $table) {
            $table->id('ID_película_actor');
            $table->unsignedBigInteger('ID_película');
            $table->unsignedBigInteger('ID_actor');
            $table->foreign('ID_película')->references('id')->on('peliculas');
            $table->foreign('ID_actor')->references('ID_actor')->on('actores');
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
        Schema::dropIfExists('películas_actores');
    }
}
