<?php
use Illuminate\Database\Seeder;
use App\TiposDeFestividad;
use Carbon\Carbon;

class TiposDeFestividadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TiposDeFestividad::truncate();
        //DB::table('tipos_de_festividad')->delete();
        TiposDeFestividad::insert([
        	[
        		'tipo'		=> 'Local'
        	],
        	[
        		'tipo'		=> 'Regional'
        	],
        	[
        		'tipo'		=> 'Nacional'
        	]
    	]);
    }
}