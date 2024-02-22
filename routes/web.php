<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CarsController::class)->group(function () {
    Route::get('/cars', 'index');
    Route::get('/cars/create', 'create');
    Route::post('/cars/store', 'store');
    Route::get('/cars/{id}/edit', 'edit');
    Route::put('/cars/{id}', 'update');
    Route::delete('/cars/{id}', 'destroy');
});

Route::controller(OrdersController::class)->group(function () {
    Route::get('/orders', 'index');
    Route::get('/orders/create', 'create');
    Route::post('/orders/store', 'store');
    Route::get('/orders/{id}/edit', 'edit');
    Route::put('/orders/{id}', 'update');
    Route::delete('/orders/{id}', 'destroy');
});