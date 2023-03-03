<?php

use App\Http\Controllers\inventoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [inventoryController::class, 'home'])->name('home');
Route::get('/er', [inventoryController::class, 'er'])->name('er');
Route::get('/ct', [inventoryController::class, 'ct'])->name('ct');
Route::get('/sc', [inventoryController::class, 'sc'])->name('sc');
Route::get('/pyt', [inventoryController::class, 'pyt'])->name('pyt');
Route::get('/sql', [inventoryController::class, 'sql'])->name('sql');

Route::get('/products', [ProductController::class , 'index'])->name('index'); 
Route::get('/products/create', [ProductController::class , 'create'])->name('create');
Route::post('/products/save', [ProductController::class, 'save'])->name('save'); 
Route::get('/products/{id}/edit', [ProductController::class , 'edit'])->name('edit'); 
Route::post('/products/{id}/update', [ProductController::class , 'update'])->name('update'); 
Route::get('/products/{id}', [ProductController::class , 'show'])->name('show'); 
Route::get('/products/{id}/delete', [ProductController::class , 'delete'])->name('delete'); 

// Route::get('/hello', [inventoryController::class, 'hello']);
