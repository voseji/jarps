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
   return view('auth/index');
});



Route::get('enrol', function () {
    return view('auth/enrol');
 });

 Route::get('new-user', function () {
    return view('new-user');
 });

 Route::get('candidates', function () {
    return view('candidates');
 });

 Route::get('edit-candidate', function () {
    return view('edit-candidate');
 });

 Route::get('new-candidate', function () {
    return view('new-candidate');
 });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'HomeController@login')->name('auth.index');


Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');


Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');


Route::get('view-records','StudViewController@index');