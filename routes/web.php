<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;
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

Route::get('/',[ClienteController::class,'showHome'])->name('home'); 

Route::get('/cadastro-cliente',[ClienteController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-cliente'); 
Route::get('/cadastro-cliente',[ClienteController::class,'showFormularioCadastro'])->name('envia-banco-cliente');
 
Route::get('/cadastro-funcionario',[FuncionarioController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-funcionario'); 
Route::get('/cadastro-funcionario',[FuncionarioController::class,'showFormularioCadastro'])->name('envia-banco-funcionario');

Route::get('/cadastro-quarto',[QuartoController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-quarto'); 
Route::get('/cadastro-quarto',[QuartoController::class,'showFormularioCadastro'])->name('envia-banco-quarto');

Route::get('/cadastro-reserva',[ReservaController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-reserva'); 
Route::get('/cadastro-reserva',[ReservaController::class,'showFormularioCadastro'])->name('envia-banco-reserva');