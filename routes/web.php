<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::post('/', [ProductController::class, 'index']);

Route::get('/store1', [ProductController::class, 'store1'])->name('store1');
Route::post('/store', [ProductController::class, 'store'])->name('store');

Route::get('/show', [ProductController::class, 'show'])->name('show');

Route::delete('/show/{product:id}', [ProductController::class, 'destroy'])->name('destroy');
Route::get('/show/{product:id}/edit', [ProductController::class, 'edit'])->name('edit');
Route::put('/show/{product:id}/edit', [ProductController::class, 'update'])->name('update');
