<?php
use Illuminate\Database\Seeder;
use App\DiasSemana;
use Carbon\Carbon;
class DiasSemanaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiasSemana::truncate();
        DiasSemana::insert([
        	[
                'id'		=> 0,
                'nombre'    => 'Domingo'
        	],
        	[
                'id'		=> 1,
                'nombre'    => 'Lunes'
        	],
        	[
                'id'		=> 2,
                'nombre'    => 'Martes'
        	],
        	[
                'id'		=> 3,
                'nombre'    => 'Miercoles'
        	],
        	[
                'id'		=> 4,
                'nombre'    => 'Jueves'
        	],
        	[
                'id'		=> 5,
                'nombre'    => 'Viernes'
        	],
        	[
                'id'		=> 6,
                'nombre'    => 'Sabado'
        	]
    	]);
    }
}