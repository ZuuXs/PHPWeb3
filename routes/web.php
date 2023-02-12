<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NomController;

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


Route::get('/', [NomController::class, 'index'])->name('nom.index');
Route::get('/create', [NomController::class, 'create'])->name('nom.create');
Route::post('/store', [NomController::class, 'store'])->name('nom.store');
Route::get('/{nom}/edit', [NomController::class, 'edit'])->name('nom.edit');
Route::put('/{nom}', [NomController::class, 'update'])->name('nom.update');
Route::delete('/{nom}', [NomController::class, 'destroy'])->name('nom.destroy');