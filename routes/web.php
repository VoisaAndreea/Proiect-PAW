<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticolController;
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

//Ruta pentru pagina cu articole
Route::get('/article', [ArticolController::class, 'index']);

//Ruta pentru a afisa un singur articol
Route::get('/article/{article}', [ArticolController::class, 'show'])->name('article.show');

//Ruta pentru a crea un articol
Route::get('/article/create', [ArticolController::class, 'create']);

//Se va posta articolul in baza de date
Route::post('/article', [ArticolController::class, 'store'])->name('article.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
