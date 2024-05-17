<?php

use App\Http\Controllers\admin\ComicController as AdminController;
use App\Http\Controllers\guests\ComicController;
use Illuminate\Support\Facades\Route;

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

// ADMIN
Route::resource('comics', AdminController::class);


// GUESTS

Route::get('/', [ComicController::class, 'index'])->name('guests.welcome');
Route::get('/show/{comic}', [ComicController::class, 'show'])->name('guests.show');
