<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

Route::view('/', 'home')->name('home');


Route::view('contactos', 'contactos')->name('contactos');
Route::view('servicios', 'servicios')->name('servicios');
Route::view('proyectos', 'proyectos')->name('proyectos');
Route::view('blog', 'blog')->name('blog');

Route::get('/clientes/crear', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}', [ClientesController::class, 'show'])->name('clientes.show');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes');
Route::get('/clientes/{id}/editar', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::patch('/clientes/{id}/update', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');