<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client;

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

// home page
Route::get('/','Client\welcome@getHomePage')->name('homePage');

// product detail
Route::get('/detail/{pro_Name}', 'Client\welcome@getDetail')->name('detailProduct');

// cart
Route::get('/cart', 'Client\Cart\cart@getToCart')->name('getCart');
Route::post('/cart', 'Client\Cart\cart@postToCart')->name('postCart');

// edit cart
Route::post('/edit-cart', 'Client\Cart\cart@editcart')->name('edit_cart');

// purchase
Route::get('/user/purchase', 'Client\Cart\purchase@getpurchase')->name('get_purchase');
Route::post('/user/purchase', 'Client\Cart\purchase@postpurchase')->name('post_purchase');

// login
Route::get('/user/login', 'Client\LoginContronller@create')->name('login');
Route::post('/user/login', 'Client\LoginContronller@loginUser');

// register
Route::get('/user/register', 'Client\RegisterController@create');
Route::post('/user/register', 'Client\RegisterController@store');

// forgot password
Route::get('/user/forgotPass', 'Client\forgotPassword@getForgotPassword');
Route::post('/user/forgotPass', 'Client\forgotPassword@postForgotPassword');

// send email
Route::get('/testSendMail', 'Client\SendMailController@create');
Route::post('/testSendMail', 'Client\SendMailController@sendCodeResetPassword');

// entercode
Route::get('/user/enterCode', 'Client\forgotPassword@getEnterCode');
Route::post('/user/enterCode', 'Client\forgotPassword@postEnterCode');

Route::get('/confirmPass', 'Client\updatePassword@getconfirmPass');
Route::post('/confirmPass', 'Client\updatePassword@postconfirmPass');

// admin
require 'admin.php';