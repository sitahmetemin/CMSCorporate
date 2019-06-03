<?php

Route::get('/login', 'AdminAuthController@index');
Route::post('/login', 'AdminAuthController@login');
Route::get('/logout', 'AdminAuthController@logout');

Route::prefix('admin')->group(function () {
//    Middleware auth control
//Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/home', 'AdminHomeController@index');

//    -------------------------------------------------------------List
    Route::get('/posts', 'AdminPostController@index');
    Route::get('/products', 'AdminProductController@index');
    Route::get('/menus', 'AdminMenuController@index');
    Route::get('/users', 'AdminUserController@index');
    Route::get('/slider', 'AdminSliderController@index');

//    --------------------------------------------------------------Create Page
	Route::get('/menus/create', 'AdminMenuController@create');
	Route::get('/posts/create', 'AdminPostController@create');
    Route::get('/products/create', 'AdminProductController@create');
    Route::get('/users/create', 'AdminUserController@create');
    Route::get('/slider/create', 'AdminSliderController@create');

//    --------------------------------------------------------------Store
	Route::post('/menus/store', 'AdminMenuController@store');
	Route::post('/posts/store', 'AdminPostController@store');
	Route::post('/products/store', 'AdminProductController@store');
	Route::post('/users/store', 'AdminUserController@store');
	Route::post('/slider/store', 'AdminSliderController@store');

//    --------------------------------------------------------------Edit Page
	Route::get('/menus/edit/{id}', 'AdminMenuController@edit');
	Route::get('/posts/edit/{id}', 'AdminPostController@edit');
    Route::get('/products/edit/{id}', 'AdminProductController@edit');
    Route::get('/users/edit/{id}', 'AdminUserController@edit');
    Route::get('/slider/edit/{id}', 'AdminSliderController@edit');

//    --------------------------------------------------------------Update
	Route::post('/menus/edit/{id}', 'AdminMenuController@update');
	Route::post('/posts/edit/{id}', 'AdminPostController@update');
	Route::post('/products/edit/{id}', 'AdminProductController@update');
	Route::post('/users/edit/{id}', 'AdminUserController@update');
	Route::post('/slider/edit/{id}', 'AdminSliderController@update');

//    ---------------------------------------------------------------Delete
    Route::get('/menus/delete/{id}', 'AdminMenuController@destroy');
    Route::get('/posts/delete/{id}', 'AdminPostController@destroy');
    Route::get('/products/delete/{id}', 'AdminProductController@destroy');
    Route::get('/users/delete/{id}', 'AdminUserController@destroy');
    Route::get('/slider/delete/{id}', 'AdminSliderController@destroy');

//    --------------------------------------------------------------Settings
	Route::get('/settings', 'AdminSettingController@index');
	Route::post('/settings/site', 'AdminSettingController@updateSite');
	Route::post('/settings/social', 'AdminSettingController@updateSocial');
	Route::post('/settings/contact', 'AdminSettingController@updateContact');

});

Route::get('/', 'UIController@index')->name('home');
Route::get('/{slug}', 'UIController@index')->name('list');
Route::get('/blog/{slug}', 'BlogController@blog')->name('blog');
Route::get('/product/{slug}', 'ProductController@product')->name('product');
