<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\McController;

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

Route::get('/', [App\Http\Controllers\McController::class, 'index'])->name('myoi.index');
Route::put('/finalizar', [App\Http\Controllers\McController::class, 'update'])->name('finalizar');

Route::get('/empresas', [App\Http\Controllers\McController::class, 'empresas'])->name('orden');
Route::get('/usuarios', [App\Http\Controllers\McController::class, 'usua'])->name('ordensaurio');