<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Auth;

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

// Rotas para 'VEICULOS'

Route::get('/', [VeiculosController::class, 'index']);
Route::get('/add', [VeiculosController::class, 'create']);
Route::get('/update/{id}', [VeiculosController::class, 'show'])->name('VeiculoController.show');
Route::post('/addveiculo', [VeiculosController::class, 'store'])->name('VeiculoController.store');
Route::post('/delete/{id}', [VeiculosController::class, 'delete'])->name('VeiculoController.delete');
Route::post('/update/{id}', [VeiculosController::class, 'update'])->name('VeiculoController.update');

Route::get('/veiculos', [VeiculosController::class, 'list']);

// Rotas para 'CLIENTES'

Route::get('/clientes_table', [ClienteController::class, 'index']);
Route::get('/add_cliente', [ClienteController::class, 'create']);
Route::get('/update_cli/{id}', [ClienteController::class, 'show'])->name('ClienteController.show');
Route::post('/addcliente', [ClienteController::class, 'store'])->name('ClienteController.store');
Route::post('/delete_cli/{id}', [ClienteController::class, 'delete'])->name('ClienteController.delete');
Route::post('/update_cli/{id}', [ClienteController::class, 'update'])->name('ClienteController.update');

Route::get('/home', function() { return view('home'); });
Route::get('/sobre', function() { return view('Sobre.about_us'); });

Route::get('/login', [UsuariosController::class, 'login']);
Route::get('/register', [UsuariosController::class, 'registerPage']);
Route::post('/auth', [UsuariosController::class, 'auth'])->name('auth');
Route::post('/register', [UsuariosController::class, 'register'])->name('register');
