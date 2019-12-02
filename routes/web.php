<?php

//Backend router start
Route::get('/dashboard/login','Backend\AuthController@showLogin')->name('backend.login.get');
Route::post('/dashboard/login','Backend\AuthController@loginProcess')->name('backend.login.post');

Route::group(['prefix' => 'dashboard', 'namespace' => 'Backend', 'middleware'=>'auth'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::post('/logout','AuthController@logout')->name('backend.logout.post');
    Route::get('setting','SettingController@index')->name('setting.index');
    Route::post('setting','SettingController@update')->name('setting.update');
});

Route::get('/', 'Frontend\FrontendController@say');
