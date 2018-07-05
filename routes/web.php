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
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/welcome',function (){
    return view('welcome');
});
Route::get('/login', function () {
    return view('test');
});
Route::get('/createpost', function () {
    return view('createpost');
});


Route::post('/signup-data','Controller@usersignup');
Route::post('/userlogin','Controller@usersignin');
Route::post('/addpost','Controller@addpost');
