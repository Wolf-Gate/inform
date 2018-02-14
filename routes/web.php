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
Route::get('/fitness-studio-crailsheim', ['as' => 'studio', 'uses' => 'HomeController@studio']);
Route::get('/fitness-trainer-crailsheim', ['as' => 'trainer', 'uses' => 'HomeController@trainer']);
Route::get('/fitness-kursplan-crailsheim', ['as' => 'kursplan', 'uses' => 'HomeController@kursplan']);
Route::get('/fitness-probetraining-crailsheim', ['as' => 'probetraining', 'uses' => 'HomeController@preise']);

Route::get('/fitness-rundgang-crailsheim', ['as' => 'rundgang', 'uses' => 'HomeController@rundgang']);
Route::get('/fitness-aktion-crailsheim', ['as' => 'aktion', 'uses' => 'HomeController@aktion']);
Route::get('/inform-body-shop', ['as' => 'shop', 'uses' => 'HomeController@shop']);
Route::get('/kontakt-conversion', ['as' => 'conversion', 'uses' => 'HomeController@conversion']);
Route::get('/fitness-personal-training-crailsheim', ['as' => 'personal', 'uses' => 'HomeController@personal']);
Route::get('/firmen-fitness-crailsheim', ['as' => 'firmen', 'uses' => 'HomeController@firmen']);
Route::get('/fitness-studio-kontakt', ['as' => 'kontakt', 'uses' => 'HomeController@kontakt']);
Route::post('kontakt_sended', ['as' => 'kontakt_sended', 'uses' => 'HomeController@kontakt_sended']);
Route::get('/fitness-studio-impressum', ['as' => 'impressum', 'uses' => 'HomeController@impressum']);
Route::get('/fitness-studio-datenschutz', ['as' => 'datenschutz', 'uses' => 'HomeController@datenschutz']);


