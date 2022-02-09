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

Route::get('/', 'GuestController@home') -> name('home');

Route::post('/register', 'Auth\RegisterController@register') -> name('register');
Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');

Route::get('/post', 'GuestController@post') -> name('post');

Route::get('/post/create', 'HomeController@create') ->name('create');
Route::post('/post/store', 'HomeController@storePost') ->name('storePost');

Route::get('post/edit/{id}', 'HomeController@edit')->name('post.edit');
Route::post('post/update/{id}', 'HomeController@update') -> name('post.update');

Route::get('post/delete/{id}', 'HomeController@delete') -> name('post.delete');