<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitoramento extends Model
{

    use HasFactory;
    protected $table="monitoramento";
    protected $fillable = [
       'solicitacao',
   ];
}

