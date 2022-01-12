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

Auth::routes();

Route::get('/dash', 'HomeController@index')->name('dash');
Route::get('/dashprofile', 'HomeController@profile')->name('profiledash');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/blog-area', 'BlogController@index')->name('blog');
Route::get('/add-post', 'PostController@add')->name('postadd');
Route::post('/ad', 'PostStoreController@stor');



