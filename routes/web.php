<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

// -------------------- frontend routes start --------------------
Route::get('/', function () {
    return view('index');
});

Route::post('register-process',[IndexController::class,'register']);

Route::get('about', function () {
    return view('aboutus');
});

Route::get('course', function () {
    return view('aboutus');
});

Route::get('blog', function () {
    return view('aboutus');
});

Route::get('contact', function () {
    return view('aboutus');
});

// -------------------- frontend routes end --------------------

// -------------- admin routes start ----------------------------

Route::get('admin/dashboard',[AdminController::class,'dashboard'])->middleware('loginCheck');

Route::resource('admin/course', CourseController::class)->middleware('loginCheck');
Route::resource('admin/subject', SubjectController::class)->middleware('loginCheck');
Route::resource('admin/question', QuestionController::class)->middleware('loginCheck');

Route::get('admin/login', function(){
    return view('admin/login');
});
Route::post('admin/loginprocess', [AdminController::class, 'login']);
Route::get('admin/logout', [AdminController::class, 'logout']);

// -------------------- admin routes end --------------------------
