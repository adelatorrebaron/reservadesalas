<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosEdificioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_edificio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('edificio_id')->unsigned();
            $table->integer('dia_semana_id');
            $table->time('hora_apertura');
            $table->time('hora_cierre');

            $table->unique(['edificio_id', 'dia_semana_id']);

            // Indicamos cual es la clave foránea de esta tabla:
            $table->foreign('edificio_id')->references('id')->on('edificios');
            $table->foreign('dia_semana_id')->references('id')->on('dias_semana');

            //$table->primary(['edificio_id', 'dia_semana_id']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios_edificio');
    }
}
