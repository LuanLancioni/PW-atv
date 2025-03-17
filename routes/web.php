<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SegundoController;
use App\Http\Controllers\TerceiroController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\QuintoController;

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

Route::get('/', function () {
    return "isso é uma rota :) ";
});

Route::get('/', [PrincipalController::class, 'principal'])->name('index');

Route::get('/segunda', [SegundoController::class, 'segunda'])->name('segunda');

Route::get('/terceira', [TerceiroController::class, 'terceira'])->name('terceira');

Route::get('/quarta', [QuartoController::class, 'quarta'])->name('quarta');

Route::get('/quinta', [QuintoController::class, 'quinta'])->name('quinta');