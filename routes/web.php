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
// Route::get('accueil', function () {
//         return "Page d'accueil";
//         // return App\Post::all();
// });
// Route::get('contact', function () {
//         return "Page de contact";
//         // return App\Post::all();
// });
// Route::get('login', function () {
//         return "Page de connexion au BackOffice";
//         // return App\Post::all();
// });
Route::get('post', function () {
        return App\Post::all();
});
