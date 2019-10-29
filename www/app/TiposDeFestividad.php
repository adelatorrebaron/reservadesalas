<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposDeFestividad extends Model
{
    protected $table = "tipos_de_festividad";
    
    protected $fillable = [
        'tipo'
    ];

    
    public function diasfestivos()
    {
        return $this->belongsTo('App\DiasFestivo');
    }
}
