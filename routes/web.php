<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/{id}', "PostController@index")->name('posts.index');

Route::get('/admins/posts', "PostController@index")->name('posts.index');
Route::post('/admins', "PostController@store")->name('posts.store');
Route::get('/admins/create', "PostController@create")->name('posts.create');
Route::get('/admins/{id}', "PostctController@show")->name('posts.show');
Route::delete('/admins/{id}', "PostController@destroy")->name('posts.destroy');
Route::put('/admins/{id}', "PostController@update")->name('posts.update');
Route::get('/admins/{id}/edit', "PostController@edit")->name('posts.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
