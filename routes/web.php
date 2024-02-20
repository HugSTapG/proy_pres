<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Proy_pres_controller;
use App\Http\Controllers\Ingresos_Controller;
use App\Http\Controllers\Gastos_Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('proy_pres', Proy_pres_controller::class);
Route::resource('ingresos', Ingresos_Controller::class);
Route::resource('gastos', Gastos_Controller::class);
