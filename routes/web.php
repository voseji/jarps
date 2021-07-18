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
   return view('auth.index');
});



Route::get('enrol', function () {
    return view('auth/enrol');
 });

 Route::get('new-user', function () {
    return view('new-user');
 });

 

 Route::get('edit-candidate', function () {
    return view('edit-candidate');
 });

 Route::get('new-candidate', function () {
    return view('new-candidate');
 });

 Route::get('candidate-view', function () {
   return view('candidate-view');
});

Route::get('candidate-passport', function () {
   return view('candidate-passport');
});
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

Route::get('candidate-check', function () {
   return view('candidate-check');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'HomeController@login')->name('auth.index');


Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');

//route for inserting candidates records
<<<<<<< Updated upstream
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
//Route::view('candidate-passport','StudInsertController@insertform2');

Route::post('check','SearchController@check');
//Route::get('/candidate-passport','SearchController@check');
Route::get('/candidate-passport', 'SearchController@check2') -> name('candidate-passport');
=======
Route::view('/file-upload', 'new-candidate');
//Route::get('insert','StudInsertController@insertform');
//Route::post('create','StudInsertController@insert');

Route::post('/file-upload', 'StudInsertController@store');
//Route::get('candidate-passport','StudInsertController@insertform2');
//Route::get('/view-uploads', 'StudInsertController@viewUploads');
>>>>>>> Stashed changes

//Route for viewing canidates records
Route::get('candidates','StudViewController@index');
Route::get('candidate-view','StudViewController@index2');
Route::get('candidate-edit','EditCandidateController@index3');

//Route for pulling SOR and LGAOR
Route::get('new-candidate', 'DepartmentsController@index'); // localhost:8000/
Route::get('/getEmployees/{id}', 'DepartmentsController@getEmployees');

//Route for uploading passport
<<<<<<< Updated upstream
Route::view('/file-upload', 'candidate-passport');
Route::post('/file-upload', 'GeneralController@store');
//Route::get('/view-uploads', 'GeneralController@viewUploads');

=======
>>>>>>> Stashed changes


//Route::get('/view_uploads', 'GeneralController@viewUploads2');


<<<<<<< Updated upstream
=======
Route::get('upload-images', 'ImageController@index');
Route::post('upload-images', 'ImageController@storeImage');
>>>>>>> Stashed changes

Route::get('candidate-edit/{$id}', 'UserNavigate@special');