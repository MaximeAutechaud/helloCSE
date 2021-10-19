<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CelebrityController;

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

Route::get('/', [CelebrityController::class, 'index'])->name('home');
Route::get('/create', [CelebrityController::class, 'create'])->name('create');
Route::post('/create', [CelebrityController::class, 'store'])->name('store');
Route::get('/delete/{id}', [CelebrityController::class, 'delete'])->name('delete');
Route::get('/edit/{id}',[CelebrityController::class, 'edit'])->name('edit');
Route::post('/update', [CelebrityController::class, 'update'])->name('update');
