<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = [
        'id','nombre','descripcion','precio','cantidad','subTotal'
   ];
}
