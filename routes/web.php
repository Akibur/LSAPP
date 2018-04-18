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
//Signin controller
Route::get('/signin', 'SigninController@index');
Route::post('/signin', 'SigninController@verify');

//signup controller
Route::get('/signup', 'SignupController@index');
Route::post('/signup', 'SignupController@studentSignup');



//Admin home controller
Route::get('/adminHome','AdminHomeController@index');
Route::get('/createCourse','AdminHomeController@createCourse');
Route::post('/createCourse','AdminHomeController@storeCourse'); //creates new course in database
Route::post('/createTeacher','AdminHomeController@storeTeacher'); //creates new teacher in database


Route::get('/createTeacher','AdminHomeController@createTeacher');




//Route::resource('user', 'UserController');
