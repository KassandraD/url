<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerUrl;

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

Route::get('/', 'App\Http\Controllers\controllerUrl@index')->name('index.route');

Route::get('/{url}', 'App\Http\Controllers\controllerUrl@short')->name('redirecciona.route');

Route::post('/generarUrl', 'App\Http\Controllers\controllerUrl@generar')->name('generar.route');