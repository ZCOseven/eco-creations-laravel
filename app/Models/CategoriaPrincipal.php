<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaPrincipal extends Model
{
    //
    protected $fillable = ['nomcatprin'];

    public function categorias(){
        
        return $this->hasMany(Categoria::class);
    }
}
