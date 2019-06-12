<?php

Route::get('/login', 'AdminAuthController@index');
Route::post('/login', 'AdminAuthController@login');
Route::get('/logout', 'AdminAuthController@logout');

Route::prefix('admin')->group(function () {
//    Middleware auth control
//Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/home', 'AdminHomeController@index');

    Route::prefix('menus')->group(function (){
        Route::get('/', 'AdminMenuController@index');

        Route::get('/create', 'AdminMenuController@create');

        Route::get('/edit/{id}', 'AdminMenuController@edit');

        Route::get('/delete/{id}', 'AdminMenuController@destroy');

        Route::post('/store', 'AdminMenuController@store');

        Route::post('/edit/{id}', 'AdminMenuController@update');
    });

    Route::prefix('posts')->group(function (){
        Route::get('/', 'AdminPostController@index');

        Route::get('/deleted', 'AdminPostController@getDeletedList');

        Route::get('/create', 'AdminPostController@create');

        Route::get('/edit/{id}', 'AdminPostController@edit');

        Route::get('/copy/{id}', 'AdminPostController@copyItem');

        Route::get('/delete/{id}', 'AdminPostController@destroy');

        Route::get('/hardDelete/{id}', 'AdminPostController@hardDelete');

        Route::post('/store', 'AdminPostController@store');

        Route::post('/edit/{id}', 'AdminPostController@update');
    });

    Route::prefix('comments')->group(function (){
        Route::get('/', 'AdminCommentController@index');

        Route::get('/deleted', 'AdminCommentController@getDeletedList');

        Route::get('/get-post-of-commenets/{id}', 'AdminCommentController@getPostComment');

        Route::post('/store', 'AdminCommentController@store');

        Route::post('/show/{id}', 'AdminCommentController@show');
    });

    Route::prefix('products')->group(function (){
        Route::get('/', 'AdminProductController@index');

        Route::get('/create', 'AdminProductController@create');

        Route::get('/edit/{id}', 'AdminProductController@edit');

        Route::get('/delete/{id}', 'AdminProductController@destroy');

        Route::post('/store', 'AdminProductController@store');

        Route::post('/edit/{id}', 'AdminProductController@update');
    });

    Route::prefix('users')->group(function (){
        Route::get('/', 'AdminUserController@index');

        Route::get('/create', 'AdminUserController@create');

        Route::post('/store', 'AdminUserController@store');

        Route::get('/edit/{id}', 'AdminUserController@edit');

        Route::post('/edit/{id}', 'AdminUserController@update');

        Route::get('/delete/{id}', 'AdminUserController@destroy');

    });

    Route::prefix('slider')->group(function (){
        Route::get('/', 'AdminSliderController@index');

        Route::get('/create', 'AdminSliderController@create');

        Route::post('/store', 'AdminSliderController@store');

        Route::get('/edit/{id}', 'AdminSliderController@edit');

        Route::post('/edit/{id}', 'AdminSliderController@update');

        Route::get('/delete/{id}', 'AdminSliderController@destroy');

    });

    Route::prefix('settings')->group(function (){
        Route::get('/', 'AdminSettingController@index');
        Route::post('/site', 'AdminSettingController@updateSite');
        Route::post('/social', 'AdminSettingController@updateSocial');
        Route::post('/contact', 'AdminSettingController@updateContact');
    });


});

Route::get('/', 'UIController@index')->name('home');
Route::get('/{slug}', 'UIController@index')->name('list');
Route::get('/blog/{slug}', 'BlogController@blog')->name('blog');
Route::get('/product/{slug}', 'ProductController@product')->name('product');
