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

Route::get('/', 'PagesController@index');

Auth::routes([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

//Route::resource('about', 'AboutController');

Route::get('/about', 'AboutController@index');
Route::get('/schoolhistory', 'AboutController@schoolhistory');
Route::get('/corevalues', 'AboutController@corevalues');
Route::get('/eslr', 'AboutController@eslr');
Route::get('/testemony', 'AboutController@testemony');
Route::get('/vision', 'AboutController@vision');

Route::resource('academics', 'AcademicsController');
Route::resource('admissions', 'AdmissionController');
Route::resource('studentlife', 'StudentController');
Route::resource('international', 'InternationalController');
Route::resource('contact', 'ContactController');
Route::resource('documents', 'DocumentsController');
