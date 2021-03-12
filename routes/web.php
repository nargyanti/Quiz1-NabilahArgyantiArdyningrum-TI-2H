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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/course-details', function () {
    return view('course-details');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/trainers', function () {
    return view('trainers');
});
