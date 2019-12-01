<?php

//Backend router start
Route::get('/dashboard/login','Backend\AuthController@showLogin')->name('backend.login.get');
Route::post('/dashboard/login','Backend\AuthController@loginProcess')->name('backend.login.post');

Route::group(['prefix' => 'dashboard', 'namespace' => 'Backend'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::post('/logout','AuthController@logout')->name('backend.logout.post');
});

Route::get('/', 'Frontend\FrontendController@say');
