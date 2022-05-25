<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\categoria;
use App\Models\producto;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tecsup', function () {
    return view('tecsup');
});
Route::get('/categorias', function () {
    return view('categorias');
});
Route::get('/productos', function () {
    return view('productos');
});
Route::get('/usuario', function () {
    return User::all();
});
Route::get('/categoria', function () {
    return categoria::all();
});
Route::get('/producto', function () {
    return producto::all();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
