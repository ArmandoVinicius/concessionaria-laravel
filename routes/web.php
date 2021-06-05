<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculosController;

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

Route::get('/', [VeiculosController::class, 'index']);
Route::get('/add', [VeiculosController::class, 'create']);
Route::get('/update/{id}', [VeiculosController::class, 'show'])->name('VeiculoController.show');
Route::post('/addveiculo', [VeiculosController::class, 'store'])->name('VeiculoController.store');
Route::post('/delete/{id}', [VeiculosController::class, 'delete'])->name('VeiculoController.delete');
Route::post('/update/{id}', [VeiculosController::class, 'update'])->name('VeiculoController.update');