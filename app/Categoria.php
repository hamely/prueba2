<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Categoria extends Model
{
    protected $table = 'categorias';


     public  function user()
    {

        return $this->belongsToMany(User::class,'categoria_users','categoria_id','user_id')->withPivot('id','titulo','ruta','contenido');
    }
}
