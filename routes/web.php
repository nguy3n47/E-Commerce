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
Route::get('/{pro_name}', 'Client\welcome@getDetail');


// login
Route::get('/login', 'Client\LoginContronller@create');
Route::post('/login', 'Client\LoginContronller@loginUser');

// register
Route::get('/register', 'Client\RegisterController@create');
Route::post('/register', 'Client\RegisterController@store');

// forgot password
Route::get('/forgotPass', 'Client\forgotPassword@getForgotPassword');
Route::post('/forgotPass', 'Client\forgotPassword@postForgotPassword');

// send email
Route::get('/testSendMail', 'Client\SendMailController@create');
Route::post('/testSendMail', 'Client\SendMailController@sendCodeResetPassword');

// entercode
Route::get('/enterCode', 'Client\forgotPassword@getEnterCode');
Route::post('/enterCode', 'Client\forgotPassword@postEnterCode');

Route::get('/confirmPass', 'Client\updatePassword@getconfirmPass');
Route::post('/confirmPass', 'Client\updatePassword@postconfirmPass');