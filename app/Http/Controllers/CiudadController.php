<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class CiudadController extends Controller
{
    public function index(Request $request){


        $idProvincia = $request->id;

        $ciudades = Ciudad::where('ciudades.idProvincia',  '=', $idProvincia)
                        ->orderBy('nombreCiudad', 'asc')->get();

        return ['ciudades' => $ciudades];
    }
}
