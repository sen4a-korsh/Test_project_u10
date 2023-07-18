<?php

use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery.index');
Route::get('/delivery/create', [DeliveryController::class, 'create'])->name('delivery.create');
Route::post('/delivery/store', [DeliveryController::class, 'store'])->name('delivery.store');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
