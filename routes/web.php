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

/*Bancos*/
Route::get('/admin/bancos',[BancoController::class, 'index'])->name('bancos');
Route::get('/admin/banco',[BancoController::class, 'create'])->name('novo-banco');
Route::post('/admin/banco',[BancoController::class, 'storeBanco'])->name('store-banco');
Route::get('/admin/edit-banco/{id}', [BancoController::class, 'editBanco'])->name('editar-banco');
Route::put('/admin/update/{id}', [BancoController::class, 'updateBanco'])->name('update');
Route::get('/admin/delete-banco/{id}', [BancoController::class, 'destroy'])->name('destroy');

/*Correçõ*/
Route::get('/admin/correcoes',[BancoController::class, 'correcoes'])->name('correcoes');
Route::get('/admin/correcao',[BancoController::class, 'createCorrecao'])->name('nova-correcao');
Route::post('/admin/correcao',[BancoController::class, 'storeCorrecao'])->name('store-correcao');
Route::get('/admin/delete-correcao/{id}', [BancoController::class, 'destroyCorrecao'])->name('destroy-correcao');
/*simulador*/
Route::get('/simulador', [SimuladorController::class,'index'])->name('simulador1');
Route::get('/simulador-garantia', [SimuladorController::class,'index2'])->name('simulador2');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
