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

// SHOW
Route::get('/saint/show/{id}' , [MainController::class , 'show']) -> name('saint.show');

// DESTROY
Route::get('/saint/destroy/{id}' , [MainController::class, 'destroy']) -> name('saint.destroy');

// CREATE
Route::get('/saint/create' , [MainController::class, 'create']) -> name('saint.create');

// STORE
Route::post('/saint/store' , [MainController::class, 'store']) -> name('saint.store');