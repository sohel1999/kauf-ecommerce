<?php

//Backend router start
Route::get('/dashboard/login', 'Backend\AuthController@showLogin')->name('dashboard.login.get');
Route::post('/dashboard/login', 'Backend\AuthController@loginProcess')->name('dashboard.login.post');

Route::group(['prefix' => 'dashboard', 'namespace' => 'Backend', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::post('/logout', 'AuthController@logout')->name('dashboard.logout.post');
    Route::get('setting', 'SettingController@index')->name('setting.index');
    Route::post('setting', 'SettingController@update')->name('setting.update');
    Route::resource('categories', 'CategoryController');
});

Route::get('/', 'Frontend\FrontendController@say');
