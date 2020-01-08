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
 Route::get('/table', function () {
    return view('dashboard.tables');
 });
 Route::get('/chart', function () {
    return view('dashboard.charts');
 });
Route::get('/newstory', function () {
    return view('home1');
 });

Route::get('/trending', function () {
    return view('blog.trending');
});
Route::get('/sports', function () {
    return view('blog.sports');
});
Route::get('/news', function () {
    return view('blog.news');
});
Route::get('/edit', function () {
    return view('dashboard.edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('add-story', ['as' => 'add-story', 'uses' => 'BlogsController@save']);
Route::get('/trending','BlogsController@trending')->name('trending');
Route::get('/table','BlogsController@dashtrending')->name('trending');
Route::get('/sports','BlogsController@sports')->name('sports');
Route::get('/news','BlogsController@news')->name('news');
Route::get('/edit/{id}','BlogsController@edit')->name('edit');
Route::post('/update/{id}','BlogsController@update')->name('update-data');
Route::post('/delete/{id}','BlogsController@delete')->name('destroy');