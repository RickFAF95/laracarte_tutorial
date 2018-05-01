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
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', [
//    'as' => 'root_path', 'uses' => 'PagesController@home']
//    );
Route::name('root_path')->get('/', 'PagesController@home');
Route::name('about_path')->get('/about', 'PagesController@about');