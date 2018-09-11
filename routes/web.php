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

Route::get('/teams', 'TeamsController@index');
Route::get('/teams/{id}', 'TeamsController@show');
Route::get('/players/{id}', 'PlayersController@show');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');
Route::get('/registered', 'RegisterController@registered');
Route::get('/logout', 'LoginController@destroy'); 


Route::post('/teams/{id}', 'CommentsController@store');
Route::get('/verifyEmail/{user}/{token}', 'RegisterController@verify');

Route::get('/news', 'NewsController@index');
Route::get('/news/{id}', 'NewsController@show');
Route::get('/news/team/{team}', 'NewsController@showTeamNews');



  