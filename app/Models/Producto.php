<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nompro',
        'descpro',
        'prepro',
        'stock_disponible',
        'stock_minimo',
        'estpro',
        'certipro',
        'codcatg'
    ];


    public function categoria(){
        return $this->belongsTo(Categoria::class,'codcatg');
    }
}
