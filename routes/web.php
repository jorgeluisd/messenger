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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/api/messages', 'MessagesController@index')->name('messages.index');
Route::post('/api/messages', 'MessagesController@store')->name('messages.store');
Route::get('/api/conversations', 'ConversationsController@index')->name('conversations.index');
