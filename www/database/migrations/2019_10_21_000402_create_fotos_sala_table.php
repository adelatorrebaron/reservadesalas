<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosSalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_sala', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_path', 255);
            $table->string('foto_formato', 45);
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
        Schema::dropIfExists('fotos_sala');
    }
}
