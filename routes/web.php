<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;

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
Auth::routes(['register' => false]);

// Frontend
Route::get('/', 'FrontendController@home')->name('home');
Route::get('/products', 'FrontendController@allProduct')->name('product.all');
Route::get('/category/{slug}', 'FrontendController@categoryProducts')->name('category.products');
Route::get('/products/{slug}','FrontendController@productDetail')->name('product.detail');

// Cart
Route::prefix('cart')->group(function (){
    Route::get('/','CartController@cart')->name('cart');
    Route::get('add/{slug}','CartController@addToCart')->name('add.to.cart');
    Route::get('update/{id}','CartController@updateCart')->name('update.to.cart');
    Route::get('delete/{id}','CartController@deleteCart')->name('delete.to.cart');
});

// Comment
Route::post('/post-comment','CommentController@postComment')->name('postComment');

// Checkout
Route::get('/checkout','CartController@checkOut')->name('checkout');
Route::post('/checkout','CartController@checkOutSubmit')->name('checkoutSubmit');

// Login
Route::get('/login', 'FrontendController@login')->name('login');
Route::post('/login','FrontendController@loginSubmit')->name('login.submit');
Route::get('/logout', 'FrontendController@logout')->name('logout.submit');

// Social Facebook
Route::get('/auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('/auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

// Social Google
Route::get('auth/google', [SocialController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SocialController::class, 'handleGoogleCallback']);

// Register
Route::get('/register','FrontendController@register')->name('register');
Route::post('/register','FrontendController@registerSubmit')->name('register.submit');

// Verify email
Route::get('/verify-email','FrontendController@verifyEmail')->name('verify.email');
Route::post('/verify-email','FrontendController@verifyEmailSubmit')->name('verify.email.submit');

// Password Reset
Route::get('/password-reset','FrontendController@passwordReset')->name('user.password.reset');
Route::post('/password-reset','FrontendController@passwordResetSubmit')->name('user.password.reset.submit');

Route::get('/code-password-reset','FrontendController@codeResetPassword')->name('user.code.password.reset');
Route::post('/code-password-reset','FrontendController@codeResetPasswordSubmit')->name('user.code.password.reset.submit');

Route::get('/new-password','FrontendController@newPassword')->name('user.new.password');
Route::post('/new-password','FrontendController@newPasswordSubmit')->name('user.new.password.submit');

// User session start
Route::group(['prefix'=>'/user','middleware'=>['auth']],function(){
    // Profile
    Route::get('/profile','HomeController@profile')->name('user.profile');
    Route::post('/profile/{id}','HomeController@profileUpdate')->name('user.update.profile');
    // Password Change
    Route::get('/change-password', 'HomeController@changePassword')->name('user.changePassword.form');
    Route::post('/change-password', 'HomeController@changePasswordSubmit')->name('user.changePassword.submit');
    // Wishlists
    Route::get('/wishlists', 'WishlistController@show')->name('user.wishlist.show');
    Route::get('/wishlists/add/{id}', 'WishlistController@store')->name('user.wishlist.store');
    Route::get('/wishlists/delete/{id}', 'WishlistController@delete')->name('user.wishlist.delete');
    // Orders
    Route::get('/orders', 'HomeController@showOrders')->name('user.orders');

});

// Backed
Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');

        Route::group(['prefix'  =>   'categories'], function() {

            Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
            Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
            Route::post('/create', 'Admin\CategoryController@store');
            Route::get('/edit/{c_id}', 'Admin\CategoryController@edit')->name('admin.categories.edit');
            Route::post('/edit/{c_id}', 'Admin\CategoryController@update');
            Route::get('/delete/{c_id}', 'Admin\CategoryController@delete')->name('admin.categories.delete');
        });

        Route::group(['prefix'  =>   'products'], function() {

            Route::get('/', 'Admin\ProductController@index')->name('admin.products.index');
            Route::get('/create', 'Admin\ProductController@create')->name('admin.products.create');
            Route::post('/create', 'Admin\ProductController@store');
            Route::get('/edit/{pro_id}', 'Admin\ProductController@edit')->name('admin.products.edit');
            Route::post('/edit/{pro_id}', 'Admin\ProductController@update');
            Route::get('/delete/{pro_id}', 'Admin\ProductController@delete')->name('admin.products.delete');
        
        });

        Route::group(['prefix'  =>   'orders'], function() {

            Route::get('/', 'Admin\OrderController@index')->name('admin.orders.index');
            Route::get('/{order_number}', 'Admin\OrderController@orderDetail')->name('admin.orders.detail');
            Route::get('/update/{id}/{status}', 'Admin\OrderController@updateStatusOrder')->name('admin.orders.update');
        
        });


        Route::group(['prefix'  =>   'customers'], function() {

            Route::get('/', 'Admin\CustomerController@index')->name('admin.customers.index');
        
        });
    
    });

});