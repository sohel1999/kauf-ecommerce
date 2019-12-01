<?php

Route::group(['prefix' => 'dashboard', 'namespace' => 'Backend'], function () {
    Route::get('/', 'DashboardController@index');
});

Route::get('/', 'Frontend\FrontendController@say');
