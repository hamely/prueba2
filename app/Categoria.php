<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
   			 'nombre', 'descripcion',
		 ];

     public  function user()
    {

        return $this->belongsToMany(User::class,'entradas','categoria_id','user_id');
    }
}
