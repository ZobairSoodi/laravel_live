<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\SingleController;
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

Route::get('/hi', [MyController::class, 'test'])->name('test');

Route::get('/add', [MyController::class, 'add_page'])->name('add_page');

Route::post('/insert', [MyController::class, 'insert'])->name('insert');

Route::get('/single', SingleController::class);