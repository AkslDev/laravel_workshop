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

// Affichage des résultats de recherche
Route::get('/result', 'FrontController@search')->name('search');

// Page des stages
Route::get('/stage', 'FrontController@stage');

// Affichage des résultats de recherche pour les Stages
Route::get('/resultstage', 'FrontController@searchStage')->name('searchStage');

// Page des formations
Route::get('/formation', 'FrontController@formation');

// Affichage des résultats de recherche pour les Formations
Route::get('/resultformation', 'FrontController@searchFormation')->name('searchFormation');

// Page d'un post
Route::get('/post/{id}', 'FrontController@show') -> where(['id' => '[0-9]+']);

// Page d'un contact
Route::get('/contact', 'FrontController@contact');

// Envoie du formulaire de contact
Route::post('/contact', 'FrontController@sendmail')->name('sendmail');

// **************** Admin **************** \\

// Page d'accueil - Admin
Route::resource('admin', 'PostController')->middleware('auth');

// Affichage des résultats de recherche - Admin
Route::post('/admin', 'PostController@searchAdmin')->name('searchAdmin');

// Prévisualisation d'un post - Admin
Route::get('admin/preview/{id}', 'PostController@show')->where(['id' => '[0-9]+'])->middleware('auth');

// Page de création d'un post - Admin
Route::get('admin/create', 'PostController@create')->middleware('auth');

// Envoie du form de création d'un post - Admin
Route::post('admin/create', 'PostController@store')->middleware('auth');

// Page d'edition d'un post - Admin
Route::get('admin/edit/{id}', 'PostController@edit')->name('admin.edit')->middleware('auth');

// Envoie du form d'édition d'un post - Admin
Route::post('admin/edit/{id}', 'PostController@update')->name('admin.update')->middleware('auth');

// Suppression d'un Post - Admin
Route::get('/admin/delete/{id}','PostController@destroy')->name('admin.destroy')->middleware('auth');

// Modification du statut d'un Post
Route::get('/admin/statut/{id}','PostController@status')->name('admin.status')->middleware('auth');


Auth::routes();

