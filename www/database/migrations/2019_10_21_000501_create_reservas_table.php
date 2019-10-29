<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sala_id')->unsigned();
            $table->datetime('hora_inicio');
            $table->datetime('hora_fin');
            $table->string('nombre_contacto', 100);
            $table->string('email_contacto', 255);
            $table->string('motivo_reserva', 255)->nullable();
            $table->integer('estado_reserva_id')->unsigned();
            $table->datetime('fecha_de_resolucion');
            $table->datetime('fecha_de_creacion');

            // Indicamos cual es la clave foránea de esta tabla:
            $table->foreign('sala_id')->references('id')->on('salas');
            $table->foreign('estado_reserva_id')->references('id')->on('estados_reserva');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
