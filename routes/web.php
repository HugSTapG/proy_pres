<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Proy_pres_controller;

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

//Route::middleware('auth')->group(function () {
Route::resource('proy_pres', Proy_pres_controller::class);
//});
