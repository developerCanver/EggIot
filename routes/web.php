<?php

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

Route::get('/inicio', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


 //Peso
 //Route::resource('/peso',    'Planeacion\RequisitosController');


 Route::get('/clasificacion', function () {
    return view('clasificacion');
})->middleware('auth');


 Route::get('/huevos', function () {
    return view('egg');
})->middleware('auth');


Route::get('/distribuidora', function () {
    return view('distribuidora');
})->middleware('auth');

Route::get('/usuarios', function () {
    return view('usuarios');
})->middleware('auth');

Route::get('/iot', function () {
    return view('iot');
})->middleware('auth');
