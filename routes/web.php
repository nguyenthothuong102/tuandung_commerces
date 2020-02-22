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
    return view('home');
});
Route::group([
    'prefix'     => 'admin',
    'namespace'  => 'Admin',
    'as'         => 'admin.',
], function () {
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    //manager users
    Route::get('users/user', 'UserController@index')->name('user.index');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('users', 'UserController@store')->name('user.store');
    Route::get('users/{user}/edit', 'UserController@edit')->name('user.edit');
    Route::post('users/{user}', 'UserController@update')->name('user.update');
    Route::delete('users/{id}', 'UserController@destroy')->name('user.delete');
    Route::get('user/list_active', 'UserController@list_active')->name('user.list_active');
    Route::get('user/active', 'UserController@active')->name('user.active');
    // manager products
    Route::get('products/product', 'ProductController@index')->name('product.index');
    Route::get('products/create','ProductController@create')->name('product.create');
    Route::post('product','ProductController@store')->name('product.store');
    //manager cagegories
    Route::get('categories/category', 'CategoryController@index')->name('categories.index');
    Route::get('categories/create','CategoryController@create')->name('categories.create');
    Route::post('categories', 'CategoryController@store')->name('categories.store');
    Route::delete('categories/{id}','CategoryController@destroy')->name('categories.destroy');
    //manager orders
    Route::get('orders/order','OrderController@index')->name('order.index');
    Route::delete('order/{id}', 'OrderController@destroy')->name('order.destroy');
    Route::get('orders/{order}', 'OrderController@show')->name('orders.show');
    Route::put('orders/{order}/status', 'OrderController@updateStatus')->name('orders.update.status');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// products show - details
Route::get('/','ProductController@index')->name('product.index');
Route::get('products/{product}', 'ProductController@show')->name('products.show');

//Cart
Route::get('cart', 'CartController@index')->name('cart.index');

// Route::get('products/{product}', 'ProductController@show')->name('products.show');
Route::post('/addCart/{id}', 'CartController@addCart')->name('cart.add');
Route::post('/updateCart', 'CartController@updateCart')->name('cart.update');
Route::get('/removeCart/{id}','CartController@removeCart')->name('cart.remove');
Route::get('/checkout', 'CartController@checkout')->name('cart.checkout');
Route::post('/orderPay', 'CartController@orderPay')->name('orderPay');
