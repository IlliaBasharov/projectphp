<?php

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/city', 'CityController@index')->name('city');

Route::get('/university', 'UniversityController@index')->name('university');

Route::get('/teacher', 'TeacherController@index')->name('teacher');

Route::get('/rating', 'UniversityController@rating')->name('rating');

Route::get('/about', 'CityController@about')->name('about');
