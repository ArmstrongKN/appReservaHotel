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

Route::get('/', [ClienteController::class,'showHome'])->name('home'); 
//Grupo de Cliente
Route::get('/cadastro-cliente', [ClienteController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-cliente'); 
Route::post('/cadastro-cliente', [ClienteController::class,'cadCliente'])->name('envia-banco-cliente');
Route::post('/gerenciar-cliente', [ClienteController::class,'gerenciarCliente'])->name('gerenciar-banco-cliente');

//Grupo de Funcionario
Route::get('/cadastro-funcionario', [FuncionarioController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-funcionario'); 
Route::post('/cadastro-funcionario', [FuncionarioController::class,'cadFuncionario'])->name('envia-banco-funcionario');
Route::post('/gerenciar-funcionario', [FuncionarioController::class,'gerenciarFuncionario'])->name('envia-banco-funcionario');

//Grupo de Quarto
Route::get('/cadastro-quarto', [QuartoController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-quarto'); 
Route::post('/cadastro-quarto', [QuartoController::class,'cadQuarto'])->name('envia-banco-quarto');
Route::post('/gerenciar-quarto', [QuartoController::class,'gerenciarQuarto'])->name('envia-banco-quarto');

//Grupo de Reserva
Route::get('/cadastro-reserva', [ReservaController::class,'showFormularioCadastro'])->name('show-formulario-cadastro-reserva'); 
Route::post('/cadastro-reserva', [ReservaController::class,'cadReserva'])->name('envia-banco-reserva');
Route::post('/gerenciar-reserva', [ReservaController::class,'gerenciarReserva'])->name('envia-banco-reserva');