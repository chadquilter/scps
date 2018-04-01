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

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::get('/{lang?}',  function($lang=NULL) {
  App::setLocale($lang);
  return view ('index');
})->name('home');

Route::get('/about', 'AboutController@index');
Route::get('/academics', 'AcademicsController@index');
Route::get('/admissions', 'AdmissionsController@index');
Route::get('/studentlife', 'StudentController@index');
Route::get('/international', 'InternationalController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/documents', 'DocumentController@index');
