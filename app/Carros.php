<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carros extends Model
{
    //public $timestamps = false; //não enviar o timestamps

    protected $fillable = [
        'modelo',
        'marca',
        'preco'
    ];
}
