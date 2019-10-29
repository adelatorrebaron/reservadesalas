<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TiposDeFestividadTableSeeder::class);
        //$this->call(DiasSemanaTableSeeder::class);
        //$this->call(TiposDeViaTableSeeder::class);
        //$this->call(EstadosReservaTableSeeder::class);
        
    }
}
