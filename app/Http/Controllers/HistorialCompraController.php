<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistorialCompra;
use Carbon\Carbon;

class HistorialCompraController extends Controller
{
    public function index(Request $request){

        $getId = \Auth::user()->id;

        $historial = HistorialCompra::where('idUsuario', '=', $getId)->get();

        return ['historial' => $historial];
    }

    public function store(Request $request){

        $getId = \Auth::user()->id;
        $date = Carbon::now();

        $historial = new HistorialCompra();
        $historial->idUsuario = $getId;
        $historial->producto = $request->producto;
        $historial->cantidad = $request->cantidad;
        $historial->precioTotal = $request->precioTotal;
        $historial->fecha = $date->format('d-m-Y');
        $historial->save();                        
    }


}
