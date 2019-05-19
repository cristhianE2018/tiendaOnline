<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = [
        'codigo','nombre','descripcion','precio','cantidad'
   ];
}
