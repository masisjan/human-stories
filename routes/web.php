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

Route::group( ["middleware" => ["auth", "verified"]], function() {
    Route::prefix('admins')->group(function () {

    Route::get('/posts', "PostController@index")->name('posts.index');
    Route::post('/posts', "PostController@store")->name('posts.store');
    Route::get('/posts/create', "PostController@create")->name('posts.create');
    Route::get('/posts/{id}', "PostController@show")->name('posts.show');
    Route::delete('/posts/{id}', "PostController@destroy")->name('posts.destroy');
    Route::put('/posts/{id}', "PostController@update")->name('posts.update');
    Route::get('/posts/{id}/edit', "PostController@edit")->name('posts.edit');

    Route::get('/friends', "FriendController@index")->name('friends.index');
    Route::post('/friends', "FriendController@store")->name('friends.store');
    Route::get('/friends/create', "FriendController@create")->name('friends.create');
    Route::get('/friends/{id}', "FriendController@show")->name('friends.show');
    Route::delete('/friends/{id}', "FriendController@destroy")->name('friends.destroy');
    Route::put('/friends/{id}', "FriendController@update")->name('friends.update');
    Route::get('/friends/{id}/edit', "FriendController@edit")->name('friends.edit');

    Route::get('/cities', "CityController@index")->name('cities.index');
    Route::post('/cities', "CityController@store")->name('cities.store');
    Route::get('/cities/create', "CityController@create")->name('cities.create');
    Route::get('/cities/{id}', "CityController@show")->name('cities.show');
    Route::delete('/cities/{id}', "CityController@destroy")->name('cities.destroy');
    Route::put('/cities/{id}', "CityController@update")->name('cities.update');
    Route::get('/cities/{id}/edit', "CityController@edit")->name('cities.edit');

    Route::get('/music', "MusicController@index")->name('music.index');
    Route::post('/music', "MusicController@store")->name('music.store');
    Route::get('/music/create', "MusicController@create")->name('music.create');
    Route::get('/music/{id}', "MusicController@show")->name('music.show');
    Route::delete('/music/{id}', "MusicController@destroy")->name('music.destroy');
    Route::put('/music/{id}', "MusicController@update")->name('music.update');
    Route::get('/music/{id}/edit', "MusicController@edit")->name('music.edit');

        Route::group( ["middleware" => ["admin", "auth", "verified"]], function() {

            Route::get('/users', "AdminController@index")->name('users.index');
            Route::post('/users', "AdminController@store")->name('users.store');
//            Route::get('/users/create', "AdminController@create")->name('users.create');
            Route::get('/users/{id}', "AdminController@show")->name('users.show');
            Route::delete('/users/{id}', "AdminController@destroy")->name('users.destroy');
            Route::put('/users/{id}', "AdminController@update")->name('users.update');
            Route::get('/users/{id}/edit', "AdminController@edit")->name('users.edit');
        });
    });
});

Route::get('/people/{id}', "PostController@people")->name('people.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
