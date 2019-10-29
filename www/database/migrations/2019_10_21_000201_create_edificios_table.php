<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdificiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edificios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('denominacion', 100);
            $table->string('tipo_de_via_id', 2);
            $table->string('nombre_de_via', 100);
            $table->string('numero', 15)->nullable();
            $table->string('codigo_postal', 5);
            $table->string('municipio', 45);
            $table->string('provincia', 45);
            $table->string('pais', 45);
            $table->string('foto_path', 255)->nullable();
            $table->string('foto_formato', 45)->nullable();

            // Indicamos cual es la clave foránea de esta tabla:
            $table->foreign('tipo_de_via_id')->references('id')->on('tipos_de_via');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edificios');
    }
}
