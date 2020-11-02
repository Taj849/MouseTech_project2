<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('login','AdminController@logged');
Route::post('register','AdminController@register');

Route::get('dashboard','AdminController@profile');
Route::get('logout','AdminController@logout');

Route::post('loginUser','AdminController@login');

//for new project

// Route::get('add', 'AdminController@index'); // localhost:8000/
// Route::post('getUsers','AdminController@getUsers');

Route::post('createLicenseKeyadmin','AdminController@createLicense');

Route::get('keyadd', 'AdminController@addkey');

Route::post('UpdateKey', 'AdminController@updateKey');



Route::get('showLicense', 'AdminController@index'); // localhost:8000/
Route::post('test','AdminController@test');
Route::get('/getUsers/{id}','AdminController@test');

Route::get('/createKey/{id}/{date}','AdminController@key');

Route::get('addLicense', 'AdminController@showLicense');