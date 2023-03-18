<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\LogAcessoMiddleware;

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

Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/', [App\Http\Controllers\LoginController::class, 'autenticar'])->name('login');
Route::middleware('autenticar:logout')->get('/logout', function(){})->name('logout');

// Route::middleware('autenticar:')->post('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::middleware('autenticar:')->get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::middleware('autenticar:')->prefix('/clientes')->group(function(){
    Route::get('/verefica-contribuinte', [App\Http\Controllers\ClientesController::class, 'verefica_contribuinte'])->name('clientes-verefica-contribuinte');
    Route::post('/adicionar', [App\Http\Controllers\ClientesController::class, 'adicionar'])->name('clientes-adicionar');
    Route::get('/adicionar', [App\Http\Controllers\ClientesController::class, 'adicionar'])->name('clientes-adicionar');
});

Route::middleware('autenticar:')->prefix('/users')->group(function(){
    Route::post('/adicionar', [App\Http\Controllers\UsersController::class, 'adicionar'])->name('users-adicionar');
    Route::get('/adicionar', [App\Http\Controllers\UsersController::class, 'index'])->name('users-adicionar');
});


