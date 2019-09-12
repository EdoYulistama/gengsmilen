<?php

Route::get('/', function () {
    return view('auth/signin');
});

Route::prefix('auth')->group(function () {
    // Route::get('/signup', 'Auth\StaffAuthController@v_signup');
    // Route::post('/signup', 'Auth\StaffAuthController@signup');
    Route::get('/signin', 'Auth\StaffAuthController@v_signin');
    // Route::post('/signin', 'Auth\StaffAuthController@signin');
    // Route::get('/signout', 'Auth\StaffAuthController@signout');
    // Route::get('/locked', 'Auth\StaffAuthController@locked');
    // Route::post('/unlock', 'Auth\StaffAuthController@unlock');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', 'Wisata\DashboardController@index')->name('dashboard');
});