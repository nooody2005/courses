<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

use App\Http\Models\User;
use App\Http\Models\Course;



Route::get('/', function () {
    return view('welcome');
});



Route::get('homee',[MyController::class,'home'])->name('homee');

Route::get('loginn',[LoginController::class,'login'])->name('login');
Route::post('handlelogin',[LoginController::class,'handlelogin'])->name('handlelogin');

Route::post('logout',[LoginController::class,'logout'])->name('logouut');
//////////////////////////////////////////////////
Route::get('createu',[MyController::class,'create'])->name('createu');
Route::post('storeu',[MyController::class,'store'])->name('storeu');


Route::middleware(['auth', 'check:1'])->group(function () {




Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboardadmin');

Route::get('useraction',[AdminController::class,'useraction'])->name('user_action');
Route::get('courseaction',[AdminController::class,'courseaction'])->name('course_action');


Route::get('add_user',[AdminController::class,'add_user'])->name('add_user');
Route::get('add_course',[AdminController::class,'add_course'])->name('add_course');
Route::get('destroy',[AdminController::class,'destroy'])->name('destroy');
Route::get('edit_user',[AdminController::class,'edit_user'])->name('edit_user');
Route::get('upadate_user',[AdminController::class,'upadate_user'])->name('upadate_user');


});




Route::middleware(['auth', 'check:0'])->group(function () {


    Route::get('/student/dashboard', [AdminController::class, 'index'])->name('dashboardstudent');
});

