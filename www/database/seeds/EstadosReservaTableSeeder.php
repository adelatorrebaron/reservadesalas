<?php
use Illuminate\Database\Seeder;
use App\TipoDeFestividad;
use Carbon\Carbon;
class TipoDeFestividadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDeFestividad::truncate();
        TipoDeFestividad::insert([
        	[
        		'estado'		=> 'Pendiente'
        	],
        	[
        		'estado'		=> 'Admitida'
        	],
        	[
        		'estado'		=> 'Denegada'
        	],
        	[
        		'estado'		=> 'Anulada'
        	]
    	]);
    }
}