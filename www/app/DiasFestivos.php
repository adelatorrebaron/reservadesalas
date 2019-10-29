<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiasFestivos extends Model
{
    protected $table = "dias_festivos";

    protected $fillable = [
        'tipo_de_festividad', 'fecha', 'descripcion'
    ];

    
    public function tipodefestividad()
    {
        return $this->hasOne('App\TiposDeFestividad');
    }

}
