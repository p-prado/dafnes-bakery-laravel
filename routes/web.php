<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
    return view('index');
});

Route::view('/login', 'login');

Route::view('/category/{title}', 'category');

Route::view('/dashboard', 'dashboard');

/* Productos */
// Route::view('/productos/{productTitle}', 'product');

Route::get('/productos', [ProductController::class, 'index']);
// Route::get('/photos/popular', [PhotoController::class, 'popular']);
// Route::resource('products', [ProductController::class]);


Route::resource('category', CategoryController::class);