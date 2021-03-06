<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    
    protected $table = 'ciudades';


    protected $fillable = [
        'id', 'idProvincia', 'nombreProvincia',
    ];

    public $timestamps = false;
}
