<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buscaCategoria extends Model
{

    use HasFactory;

    protected $table="categorias";


    public function buscaCategoria(){
        return $this->hasOne(Categoria::class);
    }


}
