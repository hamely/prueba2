<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntraImagen extends Model
{
        protected $table = 'entra_imagenes';
        protected $fillable = ['nombre', 'descripcion' , 'estado','categoria_users_id']; //proteje de la signacion masiva de datos


}
