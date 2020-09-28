<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provincia;

class ProvinciaController extends Controller
{
    public function index(Request $request){

        $provincia = Provincia::orderBy('id', 'asc')->get();

        return ['provincia' => $provincia];
    }
}
