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

Route::get('candidate-check', function () {
   return view('candidate-check');
});

Route::get('delete', function () {
   return view('candidate-check');
});

Route::get('qrcode', function () {
   return QrCode::size(250)
       ->backgroundColor(255, 255, 204)
       ->generate('FCT School of Nursing & Midwifery. 2021 Admissions');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'HomeController@login')->name('auth.index');


Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');

//route for inserting candidates records
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
//Route::view('candidate-passport','StudInsertController@insertform2');

Route::post('check','SearchController@check');
//Route::get('/candidate-passport','SearchController@check');
Route::get('/candidate-passport', 'SearchController@check2') -> name('candidate-passport');

//Route for viewing canidates records
Route::get('candidates','StudViewController@index');
Route::get('candidate-view','StudViewController@index2');
Route::get('candidate-edit','EditCandidateController@index3');
 
//Route for pulling SOR and LGAOR
Route::get('new-candidate', 'DepartmentsController@index'); // localhost:8000/
Route::get('/getEmployees/{id}', 'DepartmentsController@getEmployees');
//Route::get('/candidate-edit/{id}', 'DepartmentsController@index2');
Route::get('/candidate-edit', 'DepartmentsController@index'); // localhost:8000/



//Route for uploading passport
Route::view('/file-upload', 'candidate-passport');
Route::post('/file-upload', 'GeneralController@store');
//Route::get('/view-uploads', 'GeneralController@viewUploads');

//Route to delete Candidate record
//Route::resource('candidate-view','DeleteController@del');
//Route::get('candidate-view/delete/{id}', ['as' => 'candidate-view.delete', 'users' => 'DeleteController@del']);
//Route::get('candidate-view/{id}/delete', ['as' => 'candidate-view.delete', 'uses' => 'DeleteController@del']);
//Route::get('/view_uploads', 'GeneralController@viewUploads2');



Route::get('candidate-edit/{$id}', 'UserNavigate@special');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('delete-records','DeleteController@index');
Route::get('delete/{id}','DeleteController@destroy');

Route::delete('/delete/{id}')->name('candidates.destroy');

//Route::get('/counters')->name('CountersController.open_count');

//Route::view('new-user', 'AuthController@insertform');
Route::post('new-user', 'AuthController@insert');
//Route::view('new-user', 'AuthController@view');
