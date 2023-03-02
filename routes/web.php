<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('Bus/terminal/', [App\Http\Controllers\BusController::class, 'show'])->middleware(('auth'));
Route::post('Bus/detail', [App\Http\Controllers\seatController::class, 'store'])->middleware(('auth'));

Route::get('Bus/CI', [App\Http\Controllers\TicketController::class, 'pay'])->middleware(('auth'));
Route::post('Bus/CI', [App\Http\Controllers\TicketController::class, 'store'])->middleware(('auth'));
Route::get('Bus/detail', [App\Http\Controllers\seatController::class, 'detail'])->middleware(('auth'));
Route::post('/home', [App\Http\Controllers\BusController::class, 'store'])->middleware(('auth'));




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
