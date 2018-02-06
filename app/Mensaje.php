<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    //protected $table = 'Nombre_Tabla';otro nombre de la tabla
    protected $fillable = ['nombre', 'comentario' , 'email']; //proteje de la signacion masiva de datos

    public function user()
	{
		return $this->belongsTo(User::class);
	}
}

