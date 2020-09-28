<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $fillable = [
        'id', 'nombreProvincia',
    ];

    public $timistamp = false;
}
