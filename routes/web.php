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
Route::get('/school-history', 'AboutController@schoolhistory');
Route::get('/core-values', 'AboutController@corevalues');
Route::get('/eslr', 'AboutController@eslr');
Route::get('/testemony', 'AboutController@testemony');
Route::get('/vision', 'AboutController@vision');

Route::get('/administration', 'AcademicController@administration');
Route::get('/academic-calendar', 'AcademicController@calendar');
Route::get('/departments', 'AcademicController@department');
Route::get('/powerschool', 'AcademicController@powerschool');
Route::get('/academic-schedule', 'AcademicController@schedule');

Route::get('/admissions', 'AdmissionController@admissions');
Route::get('/aplication', 'AdmissionController@admissionsaplication');
Route::get('/contact', 'AdmissionController@contact');
Route::get('/e-tuition', 'AdmissionController@etuition');
Route::get('/tuition-fees', 'AdmissionController@tuitionfees');

Route::get('/athletics', 'StudentController@athletics');
Route::get('/growth', 'StudentController@growth');

Route::get('/international-academy', 'InternationalController@academy');
Route::get('/accelerated-english', 'InternationalController@acceleratedenglish');
Route::get('/international-admission', 'InternationalController@admissionfees');
Route::get('/international-partners', 'InternationalController@partners');
Route::get('/international-services', 'InternationalController@services');

Route::resource('contact', 'ContactController');
Route::resource('documents', 'DocumentsController');
