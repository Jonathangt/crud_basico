<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(Request $request){

        $getId = \Auth::user()->id;

        $user = User::where('id', '=', $getId)->get();

        return ['user' => $user];
    }

    public function update(Request $request){

        $getId = \Auth::user()->id;

        $usuario = User::find($getId);
        
        $usuario->idProvincia = $request->idProvincia;
        $usuario->idCiudad = $request->idCiudad;
        $usuario->password = $request->password;
        $usuario->save();                        
    }

    public function delete(Request $request){

        $getId = \Auth::user()->id;

        $usuario = User::find($getId)->delete();                      
    }
}
