<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/create/legume', [HomeController::class, 'create'])->name('legume');

Route::post('/store/legume', [HomeController::class, 'store'])->name('créerLegume');

Route::post('/destroy/legume/{id}', [HomeController::class, 'destroy'])->name('delete');

Route::get('/show/legume/{id}', [HomeController::class, 'show'])->name('show');

Route::get('/edit/legume/{id}', [HomeController::class, 'edit'])->name('edit');

Route::post('/update/legume/{id}', [HomeController::class, 'update'])->name('update');
