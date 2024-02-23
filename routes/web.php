<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Proy_pres_controller;
use App\Http\Controllers\Ingresos_Controller;
use App\Http\Controllers\Gastos_Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('proy_pres', Proy_pres_controller::class);
//Route::resource('ingresos', Ingresos_Controller::class);

Route::get('/ingresos', [Ingresos_Controller::class, 'index'])->name('ingresos.index');
Route::get('/ingresos/create', [Ingresos_Controller::class, 'create'])->name('ingresos.create');
Route::post('/ingresos', [Ingresos_Controller::class, 'store'])->name('ingresos.store');
Route::get('/ingresos/{ingresos}/edit', [Ingresos_Controller::class, 'edit'])->name('ingresos.edit');
Route::put('/ingresos/{ingresos}/update', [Ingresos_Controller::class, 'update'])->name('ingresos.update');
Route::delete('/ingresos/{ingresos}/destroy', [Ingresos_Controller::class, 'destroy'])->name('ingresos.destroy');




//Route::resource('gastos', Gastos_Controller::class);
Route::get('/gastos', [Gastos_Controller::class, 'index'])->name('gastos.index');
Route::get('/gastos/create', [Gastos_Controller::class, 'create'])->name('gastos.create');
Route::post('/gastos', [Gastos_Controller::class, 'store'])->name('gastos.store');
Route::get('/gastos/{gastos}/edit', [Gastos_Controller::class, 'edit'])->name('gastos.edit');
Route::put('/gastos/{gastos}/update', [Gastos_Controller::class, 'update'])->name('gastos.update');
Route::delete('/gastos/{gastos}/destroy', [Gastos_Controller::class, 'destroy'])->name('gastos.destroy');


//});





