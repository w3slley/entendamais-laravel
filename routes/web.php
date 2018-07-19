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
    return view('pages.index');
});
Route::get('/about-me', function () {
    return view('pages.about-me');
});
Route::get('/about-project', function () {
    return view('pages.about-project');
});
Route::resource('/posts', 'PostsController');

