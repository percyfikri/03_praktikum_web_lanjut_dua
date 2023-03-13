<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('master');
});

Route::get('/Dashboard',[HomeController::class, 'index']);

Route::get('/profile',[HomeController::class, 'profile']);

Route::get('/MyDiary',[HomeController::class, 'MyDiary']);

Route::get('/contact-us',[HomeController::class, 'contact']);