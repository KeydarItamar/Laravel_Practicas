<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller {
    
  function controlUsuaris(){
    //$passw = request('password');
    $email= request('email');
    $emailArray= array('itamar@alumno.com','oriol@profesor.com','admin@centre.com');
    $password= 1234;

    if ($email == $emailArray[0]){
    return view('emails.alumno')->with('email',$email);

    }else if($email == $emailArray[1]&&$password==1234){
        return view('emails.profesor')->with('email',$email);

    }else if($email == $emailArray[2]&&$password==1234){
        return view('emails.centre')->with('email',$email);
    }

  }
}
