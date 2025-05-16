<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
    protected $fillable = ['nomcatg','codcatprincipal','estado'];

    public function categorialPrincipal(){
        return $this->belongsTo(CategoriaPrincipal::class,'codcatprincipal');
    }

    public function productos(){
        return $this->hasMany(Producto::class,'codcatg');
    }
}
