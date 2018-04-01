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


Route::get('/about', 'AboutController@index');
Route::get('/academics', 'AcademicsController@index');
Route::get('/admissions', 'AdmissionsController@index');
Route::get('/studentlife', 'StudentController@index');
Route::get('/international', 'InternationalController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/documents', 'DocumentController@index');
