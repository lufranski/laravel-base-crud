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
use App\Http\Controllers\MainController;

// HOME
Route::get('/', [MainController::class , 'home']) -> name('home');

Route::get('/saint/{id}' , [MainController::class , 'show']);

// DESTROY
Route::get('/saint/{id}/destroy' , [MainController::class, 'destroy']) -> name('saint.destroy');