<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;
use App\Http\Controllers\ControladorLib;
use App\Http\Controllers\ControladorClient;

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
//rutas para el controlador de la base de datos
Route::get('formulario/create', [ControladorLib::class, 'create'])->name('formulario.create');
//store
Route::post('formulario/store', [ControladorLib::class, 'store'])->name('formulario.store');
//index
Route::get('formulario/index', [ControladorLib::class, 'index'])->name('formulario.index');
//edit
//Route::get('formulario/{id}/show', [ControladorLib::class, 'edit'])->name('formulario.edit');
Route::put('fomulario/{id}/update', [ControladorLib::class, 'update'])->name('formulario.update');
Route::delete('formulario/{id}/delete', [ControladorLib::class, 'destroy'])->name('formulario.destroy');
//rutas para el controlador de los clientes
Route::get('clientes/create', [ControladorClient::class, 'create'])->name('clientes.create');
//store
Route::post('clientes/store', [ControladorClient::class, 'store'])->name('clientes.store');
//index
Route::get('clientes/index', [ControladorClient::class, 'index'])->name('clientes.index');
//Route::get('clientes/{id}/show', [ControladorClient::class, 'edit'])->name('clientes.edit');
Route::put('clientes/{id}/update', [ControladorClient::class, 'update'])->name('clientes.update');
//rutas para el controlador de la vista

Route::controller(ControladorVista::class)->group(
    function () {
        Route::get('menu', 'showMenu')->name('Menu');
        //Route::get('registro', 'showRegistro')->name('Registro');
        //Route::get('registrosCliente', 'showRegistroCliente')->name('reg');
    }
);

Route::post('guardarLibro', [ControladorVista::class, 'procesarLibro'])->name('SaveMem');
Route::post('guardarCliente', [ControladorVista::class, 'procesarCliente'])->name('SaveMen');