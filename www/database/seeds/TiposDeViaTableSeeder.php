<?php
use Illuminate\Database\Seeder;
use App\TiposDeVia;
use Carbon\Carbon;
class TiposDeViaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TiposDeVia::truncate();
        TiposDeVia::insert([
        	[
                'id'	        => 'AC',
                'via'           => 'Acceso'
        	],
        	[
                'id'		=> 'AG',
                'via'           => 'Agregado'
        	],
        	[
                'id'		=> 'AL',
                'via'           => 'Aldea, Alameda'
                ],
        	[
                'id'		=> 'AN',
                'via'           => 'Andador'
                ],
        	[
                'id'		=> 'AR',
                'via'           => 'Area, Arrabal'
                ],
        	[
                'id'		=> 'AU',
                'via'           => 'Autopista'
                ],
        	[
                'id'		=> 'AV',
                'via'           => 'Avenida'
                ],
        	[
                'id'		=> 'AY',
                'via'           => 'Arroyo'
                ],
        	[
                'id'		=> 'BJ',
                'via'           => 'Bajada'
                ],
        	[
                'id'		=> 'BL',
                'via'           => 'Bloque'
                ],
        	[
                'id'		=> 'BO',
                'via'           => 'Barrio'
                ],
        	[
                'id'		=> 'BQ',
                'via'           => 'Barranquil'
                ],
        	[
                'id'		=> 'BR',
                'via'           => 'Barranco'
                ],
        	[
                'id'		=> 'CA',
                'via'           => 'Cañada'
                ],
        	[
                'id'		=> 'CG',
                'via'           => 'Colegio, Cigarral'
                ],
        	[
                'id'		=> 'CH',
                'via'           => 'Chalet'
                ],
        	[
                'id'		=> 'CI',
                'via'           => 'Cinturon'
                ],
        	[
                'id'		=> 'CJ',
                'via'           => 'Calleja, Callejon'
                ],
        	[
                'id'		=> 'CL',
                'via'           => 'Calle'
                ],
        	[
                'id'		=> 'CM',
                'via'           => 'Camino, Carmen'
                ],
        	[
                'id'		=> 'CN',
                'via'           => 'Colonia'
                ],
        	[
                'id'		=> 'CO',
                'via'           => 'Concejo, Colegio'
                ],
        	[
                'id'		=> 'CP',
                'via'           => 'Campa, Campo'
                ],
        	[
                'id'		=> 'CR',
                'via'           => 'Carretera, Carrera'
                ],
        	[
                'id'		=> 'CS',
                'via'           => 'Caserio'
                ],
        	[
                'id'		=> 'CT',
                'via'           => 'Cuesta, Costanilla'
                ],
        	[
                'id'		=> 'CU',
                'via'           => 'Conjunto'
                ],
        	[
                'id'		=> 'CY',
                'via'           => 'Caleya'
                ],
        	[
                'id'		=> 'CZ',
                'via'           => 'Callizo'
                ],
        	[
                'id'		=> 'DE',
                'via'           => 'Detrás'
                ],
        	[
                'id'		=> 'DP',
                'via'           => 'Diputacion'
                ],
        	[
                'id'		=> 'DS',
                'via'           => 'Diseminados'
                ],
        	[
                'id'		=> 'ED',
                'via'           => 'Edificios'
                ],
        	[
                'id'		=> 'EM',
                'via'           => 'Extramuros'
                ],
        	[
                'id'		=> 'EN',
                'via'           => 'Entrada, Ensanche'
                ],
        	[
                'id'		=> 'EP',
                'via'           => 'Espalda'
                ],
        	[
                'id'		=> 'ER',
                'via'           => 'Extrarradio'
                ],
        	[
                'id'		=> 'ES',
                'via'           => 'Escalinata'
                ],
        	[
                'id'		=> 'EX',
                'via'           => 'Explanada'
                ],
        	[
                'id'		=> 'FC',
                'via'           => 'Ferrocarril'
                ],
        	[
                'id'		=> 'FN',
                'via'           => 'Finca'
                ],
        	[
                'id'		=> 'GL',
                'via'           => 'Glorieta'
                ],
        	[
                'id'		=> 'GR',
                'via'           => 'Grupo'
                ],
        	[
                'id'		=> 'GV',
                'via'           => 'Gran Via'
                ],
        	[
                'id'		=> 'HT',
                'via'           => 'Huerta, Huerto'
                ],
        	[
                'id'		=> 'JR',
                'via'           => 'Jardines'
                ],
        	[
                'id'		=> 'LA',
                'via'           => 'Lago'
                ],
        	[
                'id'		=> 'LD',
                'via'           => 'Lado, Ladera'
                ],
        	[
                'id'		=> 'LG',
                'via'           => 'Lugar'
                ],
        	[
                'id'		=> 'MA',
                'via'           => 'Malecon'
                ],
        	[
                'id'		=> 'MC',
                'via'           => 'Mercado'
                ],
        	[
                'id'		=> 'ML',
                'via'           => 'Muelle'
                ],
        	[
                'id'		=> 'MN',
                'via'           => 'Municipio'
                ],
        	[
                'id'		=> 'MS',
                'via'           => 'Masias'
                ],
        	[
                'id'		=> 'MT',
                'via'           => 'Monte'
                ],
        	[
                'id'		=> 'MZ',
                'via'           => 'Manzana'
                ],
        	[
                'id'		=> 'PB',
                'via'           => 'Poblado'
                ],
        	[
                'id'		=> 'PC',
                'via'           => 'Placeta'
                ],
        	[
                'id'		=> 'PD',
                'via'           => 'Partida'
                ],
        	[
                'id'		=> 'PI',
                'via'           => 'Particular'
                ],
        	[
                'id'		=> 'PJ',
                'via'           => 'Pasaje, Pasadizo'
                ],
        	[
                'id'		=> 'PL',
                'via'           => 'Poligono'
                ],
        	[
                'id'		=> 'PM',
                'via'           => 'Paramo'
                ],
        	[
                'id'		=> 'PQ',
                'via'           => 'Parroquia, Parque'
                ],
        	[
                'id'		=> 'PR',
                'via'           => 'Prolongacion, Continuacion'
                ],
        	[
                'id'		=> 'PS',
                'via'           => 'Paseo'
                ],
        	[
                'id'		=> 'PT',
                'via'           => 'Puente'
                ],
        	[
                'id'		=> 'PU',
                'via'           => 'Pasadizo'
                ],
        	[
                'id'		=> 'PZ',
                'via'           => 'Plaza'
                ],
        	[
                'id'		=> 'QT',
                'via'           => 'Quinta'
                ],
        	[
                'id'		=> 'RA',
                'via'           => 'Raconada'
                ],
        	[
                'id'		=> 'RB',
                'via'           => 'Rambla'
                ],
        	[
                'id'		=> 'RC',
                'via'           => 'Rincon, Rincona'
                ],
        	[
                'id'		=> 'RD',
                'via'           => 'Ronda'
                ],
        	[
                'id'		=> 'RM',
                'via'           => 'Ramal'
                ],
        	[
                'id'		=> 'RP',
                'via'           => 'Rampa'
                ],
        	[
                'id'		=> 'RR',
                'via'           => 'Riera'
                ],
        	[
                'id'		=> 'RU',
                'via'           => 'RUA'
                ],
        	[
                'id'		=> 'SA',
                'via'           => 'Salida'
                ],
        	[
                'id'		=> 'SC',
                'via'           => 'Sector'
                ],
        	[
                'id'		=> 'SD',
                'via'           => 'Senda'
                ],
        	[
                'id'		=> 'SL',
                'via'           => 'Solar'
                ],
        	[
                'id'		=> 'SN',
                'via'           => 'Salon'
                ],
        	[
                'id'		=> 'SU',
                'via'           => 'Subida'
                ],
        	[
                'id'		=> 'TN',
                'via'           => 'Terrenos'
                ],
        	[
                'id'		=> 'TO',
                'via'           => 'Torrente'
                ],
        	[
                'id'		=> 'TR',
                'via'           => 'Travesia'
                ],
        	[
                'id'		=> 'UR',
                'via'           => 'Urbanizacion'
                ],
        	[
                'id'		=> 'VA',
                'via'           => 'Valle'
                ],
        	[
                'id'		=> 'VD',
                'via'           => 'Viaducto'
                ],
        	[
                'id'		=> 'VI',
                'via'           => 'Via'
                ],
        	[
                'id'		=> 'VL',
                'via'           => 'Vial'
                ],
        	[
                'id'		=> 'VR',
                'via'           => 'Vereda'
                ]

        ]);
    }
}