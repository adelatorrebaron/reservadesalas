<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposDeSalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_de_sala', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45)->unique();
            $table->integer('dias_minimo_antelacion')->default(2);
            $table->integer('dias_maximo_antelacion')->default(0);
            $table->integer('duracion_minima_reserva')->default(60); // En minutos
            $table->boolean('requiere_autorizacion')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_de_sala');
    }
}
