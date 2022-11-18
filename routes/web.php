<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimuladorController;

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
Route::get('/credito-imobiliario', function(){
    return view('credito-imobiliario');
});
Route::get('/credito-com-garantia', function(){
    return view('credito-com-garantia');
});

Route::get('/simulador', [SimuladorController::class,'index'])->name('simulador1');
Route::get('/simulador-garantia', [SimuladorController::class,'index2'])->name('simulador2');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
