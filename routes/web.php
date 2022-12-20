<?php

use App\Http\Controllers\BancoController;
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

Route::get('/admin/bancos',[BancoController::class, 'index'])->name('bancos');
Route::get('/admin/banco',[BancoController::class, 'create'])->name('novo-banco');
Route::post('/admin/banco',[BancoController::class, 'storeBanco'])->name('store-banco');
Route::get('/admin/edit-banco/{id}', [App\Http\Controllers\BancoController::class, 'editBanco'])->name('editar-banco');
Route::put('/admin/update/{id}', [App\Http\Controllers\BancoController::class, 'updateBanco'])->name('update');
Route::get('/admin/delete-banco/{id}', [App\Http\Controllers\BancoController::class, 'destroy'])->name('destroy');




Route::get('/simulador', [SimuladorController::class,'index'])->name('simulador1');
Route::get('/simulador-garantia', [SimuladorController::class,'index2'])->name('simulador2');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
