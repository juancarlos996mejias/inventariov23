<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PanolController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});



Route::resource('panol',PanolController::class);
Auth::routes();

Route::resource('products',ProductController::class);
Auth::routes();

Route::resource('panols',PanolController::class);
Auth::routes();


Route::resource('panols.index',PanolController::class);
Auth::routes();

Route::resource('panols.show',PanolController::class);
Auth::routes();







Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/panol',[App\Http\Controllers\PanolController::class,'index'])->name('panol');

Route::get('/panols',[App\Http\Controllers\PanolController::class,'index'])->name('panol');

Route::get('/products',[App\Http\Controllers\ProductController::class,'index'])->name('product');

Route::get('/panols',[App\Http\Controllers\PanolController::class,'index'])->name('panols.index');

Route::get('/panol',[App\Http\Controllers\PanolController::class,'index'])->name('panol.show');

//Route::get('/products',[App\Http\Controllers\ProductController::class,'show'])->name('products.show');




