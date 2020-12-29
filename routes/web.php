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
Route::get('/','Client\welcome@getHomePage');

// product detail
Route::get('/{pro_Name}', 'Client\welcome@getDetail');

// cart
Route::post('/cart', 'Client\welcome@postToCart');

// login
Route::get('/user/login', 'Client\LoginContronller@create');
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

<<<<<<< HEAD
Route::get('/user/confirmPass', 'Client\updatePassword@getconfirmPass');
Route::post('/user/confirmPass', 'Client\updatePassword@postconfirmPass');
=======
Route::get('/confirmPass', 'Client\updatePassword@getconfirmPass');
Route::post('/confirmPass', 'Client\updatePassword@postconfirmPass');

// admin
require 'admin.php';
>>>>>>> 70a950d1e1d27bdf66a3e8bb0651d30163a8368d
