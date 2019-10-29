<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45)->unique();
            $table->string('descripcion', 255)->nullable();
            $table->integer('orden');
            $table->integer('tipo_de_sala_id')->unsigned();
            $table->integer('edificio_id')->unsigned();
            $table->integer('aforo_maximo');
            $table->boolean('con_asientos');
            $table->boolean('cerrada');

            // Indicamos cual es la clave foránea de esta tabla:
            $table->foreign('tipo_de_sala_id')->references('id')->on('tipos_de_sala');
            $table->foreign('edificio_id')->references('id')->on('edificios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
    }
}
