<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ubigeo;
class Lugar extends Model
{
    
    protected $table = 'lugares';

      public  function Ubigeos()
    {

        return $this->belongsToMany(Ubigeo::class,'lugar_ubigeos','lugares_id', 'ubigeos_id')->withPivot('coordenada_x','coordenada_y');//estamos definiendo  el usuario con el roles
    }

}
