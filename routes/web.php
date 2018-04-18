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
    return redirect('/signin');
    
});

Route::get('/signin', 'SigninController@index');

Route::post('/signin', 'SigninController@verify');

Route::post('/signup', 'SignupController@studentSignup');


Route::get('/adminHome','AdminHomeController@index');

Route::get('/signup', 'SignupController@index');

//Route::resource('user', 'UserController');
