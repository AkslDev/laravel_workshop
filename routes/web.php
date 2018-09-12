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

// **************** Client **************** \\

// Page d'accueil
Route::get('/', 'FrontController@index');

// Page des stages
Route::get('/stage', 'FrontController@stage');

// Page des formations
Route::get('/formation', 'FrontController@formation');

// Page d'un post
Route::get('/post/{id}', 'FrontController@show') -> where(['id' => '[0-9]+']);

// Page d'un post
Route::get('/contact', 'FrontController@contact');

// Affichage des résultats de recherche
Route::get('/search', 'FrontController@search');

// Recherche via l'index
Route::post('/search', 'FrontController@find');

// **************** Admin **************** \\

// Routes Sécurisées
Route::resource('dashboard', 'PostController')->middleware('auth');

// Page de création d'un post
Route::get('post/create', 'PostController@create')->middleware('auth');

// Envoie du form de création d'un post
Route::post('post', 'PostController@store')->middleware('auth');

// Page d'edition d'un post
Route::get('post/edit/{id}', 'PostController@edit')->name('post.edit');

// Envoie du form d'édition d'un post
Route::post('post/edit/{id}', 'PostController@update')->name('post.update');

// Suppression d'un Post
Route::get('/post/delete/{id}','PostController@destroy')->name('post.destroy');


Auth::routes();

