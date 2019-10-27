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
            $table->date('fecha');
            $table->string('descripcion', 50);

            // Añadimos la clave foránea con Ministerios. ministerio_id
			// Acordarse de añadir al array protected $fillable del fichero de modelo "DiasFestivos.php" la nueva columna:
			// protected $fillable = array('fecha','descripcion','ministerios_id');
            //$table->integer('ministerios_id')->unsigned();

            // Indicamos cual es la clave foránea de esta tabla:
            //$table->foreign('ministerios_id')->references('id')->on('ministerios');
            
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
        Schema::dropIfExists('dias_festivos');
    }
}
