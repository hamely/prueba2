<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lugar;

class Ubigeo extends Model
{
    protected $table = 'ubigeos';


      public  function Lugares()
    {

        return $this->belongsToMany(Lugar::class,'lugar_ubigeos','ubigeos_id', 'lugares_id')->withPivot('coordenada_x','coordenada_y');//estamos definiendo  el usuario con el roles
    }
}
