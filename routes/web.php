<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::view('/', 'welcome');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');
Route::get('/auth/dashboard',[MainController::class,'dashboard']);
Route::get('auth/login',[MainController::class,'login']);



