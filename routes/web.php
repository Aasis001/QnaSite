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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

                                ////Profile Section//////

//Navigating to Profile

Route::get('/profile', 'ProfileController@index')->name('profile');

//Storing title and content of user

Route::post('/newsfeed/post/{id}', 'ProfileController@store')->name('store');


                                    ////End profile section

//Navigating to All user posts

Route::get('/newsfeed','UserspostController@index')->name('newsfeed');


