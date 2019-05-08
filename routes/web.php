<?php

Route::get('/login', 'AdminAuthController@index');
Route::post('/login', 'AdminAuthController@login');
Route::get('/logout', 'AdminAuthController@logout');

Route::prefix('admin')->group(function () {
//    Middleware auth control
//Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/home', 'AdminHomeController@index');

//    -------------------------------------------------------------List
    Route::get('/posts', 'AdminHomeController@index');
    Route::get('/products', 'AdminHomeController@index');
    Route::get('/menus', 'AdminHomeController@index');
    Route::get('/users', 'AdminHomeController@index');
    Route::get('/slider', 'AdminHomeController@index');

//    --------------------------------------------------------------Create
    Route::get('/posts/create', 'AdminHomeController@index');
    Route::get('/products/create', 'AdminHomeController@index');
    Route::get('/menus/create', 'AdminHomeController@index');
    Route::get('/users/create', 'AdminHomeController@index');
    Route::get('/slider/create', 'AdminHomeController@index');

//    --------------------------------------------------------------Edit
    Route::get('/posts/edit/{id}', 'AdminHomeController@index');
    Route::get('/products/edit/{id}', 'AdminHomeController@index');
    Route::get('/menus/edit/{id}', 'AdminHomeController@index');
    Route::get('/users/edit/{id}', 'AdminHomeController@index');
    Route::get('/slider/edit/{id}', 'AdminHomeController@index');
});

Route::get('/', 'UIController@index')->name('home');
Route::get('/{slug}', 'UIController@index')->name('list');
Route::get('/blog/{slug}', 'BlogController@blog')->name('blog');
Route::get('/product/{slug}', 'ProductController@product')->name('product');
