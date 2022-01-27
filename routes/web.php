<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticolController;
use App\Http\Controllers\CategoryController;

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
//Category resource -- partea de categorii
 Route:: resource('/categories', CategoryController::class);
 // subcategorii
 Route::get('/categories',[CategoryController::class,'index'])-> name('categories.index');
 Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
 /*
 Route::post('/categories',[CategoryController::class,'store' ])-> name('categories.store');
 Route::get('/categories/{category}',[CategoryController::class,'show'])-> name('categories.show');
 Route::get('/categories/{category}/edit',[CategoryController::class,'index' ])-> name('categories.edit');
 Route::put('/categories/{category}',[CategoryController::class,'update' ])-> name('categories.update');
 Route::put('/categories/{category}',[CategoryController::class,'destroy' ])-> name('categories.destroy');

 */
Route::get('/', function () {
    return view('welcome');
});

//Ruta pentru pagina cu articole
Route::get('/article', [ArticolController::class, 'index']);


//Ruta pentru a crea un articol
Route::get('/article/create', [ArticolController::class, 'create']);

//Ruta pentru a afisa un singur articol
Route::get('/article/{article}', [ArticolController::class, 'show'])->name('article.show');

//Se va posta articolul in baza de date
Route::post('/article', [ArticolController::class, 'store'])->name('article.store');

Auth::routes();

require __DIR__.'/auth.php';
