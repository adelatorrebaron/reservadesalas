<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosCierreSalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_cierre_sala', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('dia_completo')->default(false);
            $table->datetime('hora_inicio');
            $table->datetime('hora_fin');
            $table->integer('sala_id')->unsigned();

            // Indicamos cual es la clave foránea de esta tabla:
            $table->foreign('sala_id')->references('id')->on('salas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios_cierre_sala');
    }
}
