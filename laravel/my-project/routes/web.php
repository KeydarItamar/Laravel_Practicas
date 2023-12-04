<?php

use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\signController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Ruta simple al signin
Route::get('/sign/signin', function () {
    return view('signin');
});

//Ruta con cuatro palabras al signin
// Route::get('/sign/signin/{inicia}/{sessio}/{de}/{usuari}', function ($inicia, $sessio, $de, $usuari) {
    
//     $frase = $inicia . ' ' . $sessio . ' ' . $de . ' ' . $usuari; 
//     return view('signin') -> with('frase', $frase);
// });

Route::get('/sign/signin/{v1?}/{v2?}/{v3?}/{v4?}' , [signController::class , 'signin']);
Route::get('/sign/signup/{v1?}/{v2?}/{v3?}' , [signController::class , 'signup']);



//ruta simple al signup
Route::get('/sign/signup', function () {
    return view('signup');
});

//ruta simple al signup
// Route::get('/sign/signup/{creacio}/{usuario}/{nou}', function ($creacio, $usuari, $nou) {
//     $frase = $creacio . ' '. $usuari . ' ' . $nou;
//     return view('signup')-> with('frase', $frase);
// });

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/{id}', function ($id) {
    return 'El id introducido es : ' . $id;
});

Route::post('/login', [PrimerControlador::class, 'controlUsuaris'])->name('controlerEmail')->middleware('email');  

Route::get('/error', function () {
    return view('errorAcces');
})->name('errorAcces.index');


// Route:: prefix('/login')->group(function(){  

Route::get('/login',function(){
    return view('login');
})->name('web_login');

Route::get('/crearUsuario', function(){
    return view('crearUsuario');
});
    
// Route::post('/login', function(){
//     $email= request('email');
//     $password= request('password');
//     return view('login')
//     ->with('email', $email)
//     ->with('password', $password)
//     ->name('verificar_user');
//  })->middleware(['email']);
    
// });