<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
//Rutas para el juego que muestra las preguntas de a una
Route::get('/iniciar',[GameController::class, 'index'])->name('iniciar');
Route::get('/comenzar/{id}',[GameController::class, 'comenzar'])->name('comenzar');
Route::post('/respuesta',[GameController::class, 'respuesta'])->name('respuesta');
Route::get('/pregunta',[GameController::class, 'pregunta'])->name('pregunta');

//Rutas para el juego que se muestra en una sola pagina
Route::get('/unico/iniciar','GameUniqueController@index')->name('iniciar_unico');
Route::get('/unico/comenzar/{id}','GameUniqueController@comenzar')->name('comenzar_unico');
Route::post('/unico/respuesta','GameUniqueController@resultado')->name('respuesta_unico');

//Rutas para el ranking

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
