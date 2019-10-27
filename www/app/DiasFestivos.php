<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiasFestivos extends Model
{
    protected $table = "dias_festivos";
    protected $fillable = array('fecha', 'descripcion');
}
