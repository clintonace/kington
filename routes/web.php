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


Route::get('/studentview', 'HomeController@viewstudents')->name('viewstudents');
Route::get('/dashprofile', 'HomeController@profile')->name('profiledash');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/blog-area', 'BlogController@index')->name('blog');
Route::get('/add-post', 'PostController@add')->name('postadd');
Route::post('/ad', 'PostStoreController@stor');
Route::get('details-post/{id}', 'BlogController@details')->name('post.details');

Route::post('/like/{id}/likes', 'PostController@like')->name('like');
Route::post('/comment/{id}', 'CommentController@comment')->name('comment');
Route::get('/like/{id}', 'PostController@getLikesByPost');
Route::post('/comments/{id}', 'PostController@getCommentsByPost')->name('get');
Route::get('/wallet', 'WalletController@wallet')->name('fund.wallet');
Route::post('/wallet-fund', 'WalletController@fund')->name('fund.wallet');
Route::get('/payment/callback', 'WalletController@fundCallback')->name('wallet.callback');


Route::middleware(['auth'])->prefix('dash')->group(function (){

    Route::get('/', 'HomeController@index')->name('dash');

    /* Route::get('/wallet-fund', 'WalletController@wallet')->name('wallet'); */

});


