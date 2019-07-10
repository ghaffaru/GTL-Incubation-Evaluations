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
    return view('welcome');
});

// Route::get('survey', 'SurveyController@index')->name('survey.index');

Auth::routes();

Route::get('/survey', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index'); // Redirecting home to survey page
Route::post('/survey', 'SurveyController@store');
Route::post('/facilitatorsurvey', 'FacilitatorSurveyController@store');


Route::prefix('facilitator')->group(function () {
    Route::get('/', 'FacilitatorsController@index')->name('facilitator.dashboard');
    // Route::get('dashboard', 'FacilitatorsController@index')->name('facilitator.dashboard');
    Route::get('register', 'FacilitatorsController@create')->name('facilitator.register');
    Route::post('register', 'FacilitatorsController@store')->name('facilitator.register.store');
    Route::get('login', 'Auth\FacilitatorLoginController@login')->name('facilitator.auth.login');
    Route::post('login', 'Auth\FacilitatorLoginController@loginAdmin')->name('facilitator.auth.loginAdmin');
    Route::post('logout', 'Auth\LoginController@logout')->name('facilitator.auth.logout');
  });
