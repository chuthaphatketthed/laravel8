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



Route::get("/teacher" , function (){
	return view("teacher");
});

Route::get("/student" , function (){
	return view("student");
});

Route::get("/theme" , function (){
	return view("theme");
});

// Route Template Inheritance
Route::get("/teacher/inheritance", function () {
    return view("teacher-inheritance");
});
Route::get("/student/inheritance", function () {
    return view("student-inheritance");
});
Route::get('/tables', function () {
    return view('tables');
});
// Route Template Component
Route::get("/teacher/component", function () {
    return view("teacher-component");
});
Route::get("/student/component", function () {
    return view("student-component");
});
