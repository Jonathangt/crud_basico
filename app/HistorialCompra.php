<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialCompra extends Model
{
    public $table = 'historial_compras';

    protected $fillable = [
        'id', 'idUsuario', 'producto',  'cantidad', 'precioTotal', 'fecha'
      
    ];  

    public $timestamps = false;
}

