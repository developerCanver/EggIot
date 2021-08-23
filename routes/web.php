<?php

use App\Exports\UsersExport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('/ExportarUSer', function () {
    return Excel::download(new UsersExport, 'Huevos.xlsx');
})->middleware('auth');

Route::get('/MiPerfil', function () {
    return view('miperfil.MiPerfil');
})->middleware('auth');

Route::get('/inicio', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


    //Jumbo
    Route::get('/GeneralJumbo', function () { return view('jumbo.reporteJumbo');})->middleware('auth');
    Route::get('/DetalleJumbo', function () { return view('jumbo.detalleJumbo');})->middleware('auth');
    Route::get('/graficaJumbo', function () { return view('jumbo.graficaJumbo');})->middleware('auth');

    //AAA
    Route::get('/GeneralAAA', function () { return view('AAA.reporteAAA');})->middleware('auth');
    Route::get('/DetalleAAA', function () { return view('AAA.detalleAAA');})->middleware('auth');
    Route::get('/graficaAAA', function () { return view('AAA.graficaAAA');})->middleware('auth');

    //AA
    Route::get('/GeneralA_A', function () { return view('AA.reporteAA');})->middleware('auth');
    Route::get('/DetalleA_A', function () { return view('AA.detalleAA');})->middleware('auth');
    Route::get('/graficaA_A', function () { return view('AA.graficaAA');})->middleware('auth');

    //A
    Route::get('/General_A', function () { return view('A.reporteA');})->middleware('auth');
    Route::get('/Detalle_A', function () { return view('A.detalleA');})->middleware('auth');
    Route::get('/grafica_A', function () { return view('A.graficaA');})->middleware('auth');

    //B
    Route::get('/GeneralB', function () { return view('B.reporteB');})->middleware('auth');
    Route::get('/DetalleB', function () { return view('B.detalleB');})->middleware('auth');
    Route::get('/graficaB', function () { return view('B.graficaB');})->middleware('auth');

    //C
    Route::get('/GeneralC', function () { return view('C.reporteC');})->middleware('auth');
    Route::get('/DetalleC', function () { return view('C.detalleC');})->middleware('auth');
    Route::get('/graficaC', function () { return view('C.graficaC');})->middleware('auth');

 Route::get('/clasificacion', function () {
    return view('clasificacion');
})->middleware('auth');


Route::get('/huevos', function () {
    return view('inicio.reporteHuevos');
})->middleware('auth');

Route::get('/graficaHuevos', function () {
    return view('inicio.graficaHuevos');
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
