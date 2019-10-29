<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasFestivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_festivos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_de_festividad_id')->unsigned()->nullable();
            $table->date('fecha')->unique();
            $table->string('descripcion', 50)->nullable();

            // Indicamos cual es la clave foránea de esta tabla:
            $table->foreign('tipo_de_festividad_id')->references('id')->on('tipos_de_festividad')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dias_festivos');
    }
}
