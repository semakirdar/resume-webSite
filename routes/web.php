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

Route::get('/', 'FrontController@index')->name('index');
Route::get('/resume', 'FrontController@resume')->name('resume');
Route::get('/portfolio', 'FrontController@portfolio')->name('portfolio');
Route::get('/blog', 'FrontController@blog')->name('blog');
Route::get('/contact', 'FrontController@contact')->name('contact');


Route::get('login', function () {
    return view('admin.login');
});


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
