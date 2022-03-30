<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', function () {return view('home');});
/* Associados */
Route::get('associados', [App\Http\Controllers\AssociadoController::class, 'index'])->name('associados.index');
Route::get('associados/create', [App\Http\Controllers\AssociadoController::class, 'create'])->name('associados.create');
Route::get('associados/{associado}', [App\Http\Controllers\AssociadoController::class, 'show'])->name('associados.show');
Route::put('associados/{associado}', [App\Http\Controllers\AssociadoController::class, 'update'])->name('associados.update');
Route::get('associados/{associado}/edit', [App\Http\Controllers\AssociadoController::class, 'edit'])->name('associados.edit');
Route::delete('associados/{associado}', [App\Http\Controllers\AssociadoController::class, 'destroy'])->name('associados.destroy');
Route::post('associados', [App\Http\Controllers\AssociadoController::class, 'store'])->name('associados.store');

/* Empresa */
Route::get('empresas', [App\Http\Controllers\EmpresaController::class, 'index'])->name('empresas.index');
Route::get('empresas/create', [App\Http\Controllers\EmpresaController::class, 'create'])->name('empresas.create');
Route::put('empresas/{empresa}', [App\Http\Controllers\EmpresaController::class, 'update'])->name('empresas.update');
Route::get('empresas/{empresa}/edit', [App\Http\Controllers\EmpresaController::class, 'edit'])->name('empresas.edit');
Route::delete('empresas/{empresa}', [App\Http\Controllers\EmpresaController::class, 'destroy'])->name('empresas.destroy');
Route::post('empresas', [App\Http\Controllers\EmpresaController::class, 'store'])->name('empresas.store');

/* Veiculo */
Route::get('veiculos', [App\Http\Controllers\VeiculoController::class, 'index'])->name('veiculos.index');
Route::get('veiculos/create', [App\Http\Controllers\VeiculoController::class, 'create'])->name('veiculos.create');
Route::get('veiculos/{veiculo}', [App\Http\Controllers\VeiculoController::class, 'show'])->name('veiculos.show');
Route::put('veiculos/{veiculo}', [App\Http\Controllers\VeiculoController::class, 'update'])->name('veiculos.update');
Route::get('veiculos/{veiculo}/edit', [App\Http\Controllers\VeiculoController::class, 'edit'])->name('veiculos.edit');
Route::delete('veiculos/{veiculo}', [App\Http\Controllers\VeiculoController::class, 'destroy'])->name('veiculos.destroy');
Route::post('veiculos', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculos.store');

/* Bancos */
Route::get('bancos', [App\Http\Controllers\BancoController::class, 'index'])->name('bancos.index');
Route::get('bancos/create', [App\Http\Controllers\BancoController::class, 'create'])->name('bancos.create');
Route::get('bancos/{banco}', [App\Http\Controllers\BancoController::class, 'show'])->name('bancos.show');
Route::put('bancos/{banco}', [App\Http\Controllers\BancoController::class, 'update'])->name('bancos.update');
Route::get('bancos/{banco}/edit', [App\Http\Controllers\BancoController::class, 'edit'])->name('bancos.edit');
Route::delete('bancos/{banco}', [App\Http\Controllers\BancoController::class, 'destroy'])->name('bancos.destroy');
Route::post('bancos', [App\Http\Controllers\BancoController::class, 'store'])->name('bancos.store');