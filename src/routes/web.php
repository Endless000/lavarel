<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\mainController;
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
Route::get('/', [mainController::class, 'index'])->name('layouts.index');


Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');


Route::get('/aa', function () {
    return view('layout');
});











