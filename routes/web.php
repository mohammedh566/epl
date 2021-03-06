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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/createTeam', 'TeamsController@create');

Route::post('/createTeam', 'TeamsController@store');

Route::get('/teams', 'TeamsController@index');

Route::get('/team/{id?}', 'TeamsController@show');

Route::get('/ticket/{id?}/edit','TeamsController@edit');

Route::post('/ticket/{id}/edit','TeamsController@update');

Route::post('/ticket/{id?}/delete','TeamsController@destroy');

Route::post('/createTeam', array('as' => 'upload', 'uses' => 'TeamsController@create'));
