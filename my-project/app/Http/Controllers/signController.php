<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signController extends Controller{

 public function signin(?String $v1="No hay", ?String $v2 = 'datos', ?String $v3='introducidos', ?String $v4= 'en la ruta'){
        $frase = $v1 . ' ' . $v2. ' ' . $v3 . ' ' . $v4;
        return view('signin') -> with('fraseVista', $frase);
 }

 public function signup(?String $v1="No hay", ?String $v2 = 'datos', ?String $v3= 'introducidos'){
    $frase = $v1 . ' '. $v2 . ' ' . $v3;
    return view('signup')-> with('fraseVista', $frase);
}
}