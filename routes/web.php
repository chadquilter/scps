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
use Illuminate\Support\Facades\Session;

Route::get('/locale/{lang?}', function( $lang=null){
    Session::put('lang', $lang);
    //session(['lang'=>$lang]);
    return redirect()->back();
});
Route::get('/', 'PagesController@index');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index');

//Route::resource('about', 'AboutController');
Route::post('contact/create', 'ContactController@create');
Route::post('contact/store', 'ContactController@store');
//Route::resource('contact', 'ContactController');

Route::get('/about-us/about', 'AboutController@index');
Route::get('/about-us/school-history', 'AboutController@schoolhistory');
Route::get('/about-us/core-values', 'AboutController@corevalues');
Route::get('/about-us/eslr', 'AboutController@eslr');
Route::get('/about-us/testimony', 'AboutController@testimony');
Route::get('/about-us/vision', 'AboutController@vision');

Route::get('/academic/administration', 'AcademicController@administration');
Route::get('/academic/academic-calendar', 'AcademicController@calendar');
Route::get('/academic/departments', 'AcademicController@department');
Route::get('/academic/powerschool', 'AcademicController@powerschool');
Route::get('/academic/academic-schedule', 'AcademicController@schedule');

Route::get('/admission/admissions', 'AdmissionController@admissions');
Route::get('/admission/application', 'AdmissionController@admissionsaplication');
Route::get('/admission/admission-contact', 'ContactController@index');
Route::get('/admission/e-tuition', 'AdmissionController@etuition');
Route::get('/admission/tuition-fees', 'AdmissionController@tuitionfees');

Route::get('/student-life/athletics', 'StudentController@athletics');
Route::get('/student-life/growth', 'StudentController@growth');

Route::get('/international-school/international-academy', 'InternationalController@academy');
Route::get('/international-school/accelerated-english', 'InternationalController@acceleratedenglish');
Route::get('/international-school/international-admission', 'InternationalController@admissionfees');
Route::get('/international-school/international-partners', 'InternationalController@partners');
Route::get('/international-school/international-services', 'InternationalController@services');

Route::get('/gallery/student-life-gallery', 'GalleryController@student');
Route::get('/gallery/sports-gallery', 'GalleryController@sports');
Route::get('/gallery/electives-gallery', 'GalleryController@elective');
Route::get('/gallery/art-gallery', 'GalleryController@art');
Route::get('/gallery/classroom-gallery', 'GalleryController@classroom');

Route::resource('contact-us', 'ContactController');

Route::resource('scps-schedule', 'SchedulesController');

Route::post('/file/store', 'FileController@store');
