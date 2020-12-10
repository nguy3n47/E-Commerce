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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'Client\LoginContronller@create');
Route::post('/login', 'Client\LoginContronller@store');

// forgot password
Route::get('/forgotPass', 'Client\forgotPassword@getForgotPassword');
Route::post('/forgotPass', 'Client\forgotPassword@postForgotPassword');

//
Route::get('/testSendMail', 'Client\SendMailController@create');
Route::post('/testSendMail', 'Client\SendMailController@sendCodeResetPassword');

// entercode
Route::get('/enterCode', 'Client\forgotPassword@getEnterCode');
Route::post('/enterCode', 'Client\forgotPassword@postEnterCode');

Route::get('/confirmPass', 'Client\updatePassword@getconfirmPass');
Route::post('/confirmPass', 'Client\updatePassword@postconfirmPass');