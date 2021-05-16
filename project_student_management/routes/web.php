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
Route::get('/' ,[App\Http\Controllers\AdminController::class, 'adminLoged'] );
    // return view('');
// );

Route::view('loginpage', 'adminlogin');
Route::post('isLogIn',[App\Http\Controllers\AdminController::class, 'adminLoged']);
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'adminLoged']);

Route::get('studentdetails',[App\Http\Controllers\StudentController::class, 'show']);

Route::get('/student_edit/{id}', 
    array(
        'uses' =>  'App\Http\Controllers\StudentController@edit', 
        'as'   =>  'student.edit',
    )
);

Route::post('/studentupdate/{id}', 
    array(
        'uses' =>  'App\Http\Controllers\StudentController@update', 
        'as'   =>  'student.update',
    )
);

Route::get('/student_delete/{id}', 
    array(
        'uses' =>  'App\Http\Controllers\StudentController@destroy', 
        'as'   =>  'student.delete',
    )
);


Route::get('studentregisterform',[App\Http\Controllers\StudentController::class,'create']);
Route::post('studentstore',[App\Http\Controllers\StudentController::class, 'store']);
Route::get('addbranch',[App\Http\Controllers\BranchControl::class,'create']);
Route::post('branchstore',[App\Http\Controllers\BranchControl::class, 'store']);
Route::get('branchshow',[App\Http\Controllers\BranchControl::class,'show']);


	



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('studentregisterform',[App\Http\Controllers\StudentController::class,'create']);
Route::post('studentstore',[App\Http\Controllers\StudentController::class, 'store']);
Route::get('addbranch',[App\Http\Controllers\BranchControl::class,'create']);
Route::post('branchstore',[App\Http\Controllers\BranchControl::class, 'store']);


Auth::routes();


Route::get('/branch_edit/{id}', 
    array(
        'uses' =>  'App\Http\Controllers\BranchControl@edit','as'   =>  'branch.edit', )
);

Route::post('/branchupdate/{id}', 
    array(
        'uses' =>  'App\Http\Controllers\BranchControl@update', 
        'as'   =>  'branch.update',
    )
);

Route::get('/branch_delete/{id}', 
    array(
        'uses' =>  'App\Http\Controllers\BranchControl@destroy', 
        'as'   =>  'branch.delete',
    )
);
	

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/addcourse',[App\Http\Controllers\CourseController::class,'create']);

Route::post('coursestore',[App\Http\Controllers\CourseController::class, 'store']);
Route::get('courseshow',[App\Http\Controllers\CourseController::class, 'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
