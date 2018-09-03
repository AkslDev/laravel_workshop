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

// Page d'accueil
Route::get('/', 'FrontController@index');

// Page des stages
Route::get('/stage', 'FrontController@stage');

// Page des formations
Route::get('/formation', 'FrontController@formation');

// Page d'un post
Route::get('post/{id}', 'FrontController@show') -> where(['id' => '[0-9]+']);

// Page d'un post
Route::get('contact', 'FrontController@contact');

// Routes Sécurisées
Route::resource('dashboard', 'PostController')->middleware('auth');


Auth::routes();

