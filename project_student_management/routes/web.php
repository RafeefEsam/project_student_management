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

Route::view('loginpage', 'adminlogin');
Route::post('isLogIn',[App\Http\Controllers\AdminController::class, 'adminLoged']);
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashBoard'])->name('dashboard');







/*Auth::routes();
//Route::get('loginpage',[App\Http\Controllers\AdminController::class, 'adminLogIn']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
