<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

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

Route::get('/Dashboard',[HalamanController::class, 'index']);

Route::get('/profile',[HalamanController::class, 'profile']);

Route::get('/experience',[HalamanController::class, 'experience']);

Route::get('/contact-us',[HalamanController::class, 'contact']);