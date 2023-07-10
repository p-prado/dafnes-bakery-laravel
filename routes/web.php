<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'show']);

Route::view('/login', 'login');

/* Category */
Route::get('/categoria/create', [CategoryController::class, 'create']);
Route::get('/categoria/{category}', [CategoryController::class, 'show']);
Route::post('/categoria', [CategoryController::class, 'store']);
Route::get('/categoria/{category}/edit', [CategoryController::class, 'edit']);
Route::put('/categoria', [CategoryController::class, 'update']);
Route::delete('/categoria/{category}', [CategoryController::class, 'destroy']);

/* Dashboard */
Route::get('/dashboard/categorias',[CategoryController::class, 'dashboardIndex']);
Route::get('/dashboard/productos', [ProductController::class, 'dashboardIndex']);

/* Productos */
Route::get('/productos', [ProductController::class, 'index']);
Route::get('/productos/create', [ProductController::class, 'create']);
Route::get('/productos/{product}', [ProductController::class, 'show']);
Route::post('/productos', [ProductController::class, 'store']);
Route::get('/productos/{product}/edit', [ProductController::class, 'edit']);
Route::put('/productos',[ProductController::class, 'update']);
Route::delete('/productos/{product}', [ProductController::class, 'destroy']);
// TODO: create product - add get and post


Route::resource('category', CategoryController::class);