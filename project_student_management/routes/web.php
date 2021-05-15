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

Route::get('studentregisterform',[App\Http\Controllers\StudentController::class,'create']);
Route::post('studentstore',[App\Http\Controllers\StudentController::class, 'store']);


Route::get('addbranch',[App\Http\Controllers\BranchControl::class,'create']);
Route::post('branchstore',[App\Http\Controllers\BranchControl::class, 'store']);

	


