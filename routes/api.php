<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategController;


Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//Category resource -- partea de categorii
 //Route:: resource('/categories', CategController::class);
 // subcategorii
 
 //Route::get('/categories',[CategController::class,'index'])-> name('categories.index');
 //Route::get('/categories', 'App\Http\Controllers\CategoryController@index');


 //Route::get('/categories/create',[CategController::class,'create'])->name('categories.create');
 //Route::get('/categories/create','App\Http\Controllers\CategoryController@index');
 
 //Auth::routes();
 //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 /*
 --
 Route::post('/categories',[CategoryController::class,'store' ])-> name('categories.store');
 Route::get('/categories/{category}',[CategoryController::class,'show'])-> name('categories.show');
 Route::get('/categories/{category}/edit',[CategoryController::class,'index' ])-> name('categories.edit');
 Route::put('/categories/{category}',[CategoryController::class,'update' ])-> name('categories.update');
 Route::put('/categories/{category}',[CategoryController::class,'destroy' ])-> name('categories.destroy');
 
 */
