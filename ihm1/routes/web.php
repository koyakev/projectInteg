<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionsController;

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

Route::get('/', TransactionsController::class.'@index')->name('ihm.index');

Route::get('/product1', TransactionsController::class.'@product1');
Route::get('/product2', TransactionsController::class.'@product2');

Route::post('/', TransactionsController::class.'@store')->name('ihm.store');

