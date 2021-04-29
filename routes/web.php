<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactoController;

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
    return view('index');
});

Route::redirect('/Inicio', '/', 301);

Route::get('/Nosotros', function () {
    return view('nosotros');
});

Route::get('/Productos', function () {
    return view('productos');
});

Route::get('/Servicios', function () {
    return view('servicios');
});

Route::get('/Servicios/{servicio}', [UserController::class, 'servicio']);

Route::get('/Contacto', [ContactoController::class, 'index'])->name('contacto.index');

Route::post('/Contacto', [ContactoController::class, 'store'])->name('contacto.store');

