<?php

Route::get('/', function () {
    return view('auth/signin');
});

Route::prefix('auth')->group(function () {
    Route::get('/signup', 'Auth\StaffAuthController@v_signup');
    Route::post('/signup', 'Auth\StaffAuthController@signup');
    Route::get('/signin', 'Auth\StaffAuthController@v_signin');
    // Route::post('/signin', 'Auth\StaffAuthController@signin');
    // Route::get('/signout', 'Auth\StaffAuthController@signout');
    // Route::get('/locked', 'Auth\StaffAuthController@locked');
    // Route::post('/unlock', 'Auth\StaffAuthController@unlock');

    Route::prefix('reset')->group(function () {
        Route::get('/forgot', 'Auth\StaffAuthController@v_reset');
        // Route::post('/sendmail', 'Auth\StaffAuthController@sendMail');
        // Route::get('/{token}', 'Auth\StaffAuthController@v_newpassword');
        // Route::post('/{token}', 'Auth\StaffAuthController@resetPassword');
    });
});

//Admin Start
Route::prefix('admin')->group(function () {

    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
    });

    Route::prefix('pengunjung')->group(function () {
        Route::get('/', 'Admin\PengunjungController@summarypengunjung')->name('pengunjung');
    });

    Route::prefix('objekwisata')->group(function () {
        Route::get('/', 'Admin\ObjekWisataController@summaryobjekwisata')->name('objekwisata');
    });

    Route::prefix('laporan')->group(function () {
        Route::get('/', 'Admin\LaporanController@summarylaporan')->name('laporan');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', 'Admin\UsersController@summaryusers')->name('users');
    });

    Route::prefix('master')->group(function () {
        Route::prefix('kepemilikan')->group(function () {
            Route::get('/', 'Admin\MasterController@summarykepemilikan')->name('kepemilikan');
        });

        Route::prefix('kecamatan')->group(function () {
            Route::get('/', 'Admin\MasterController@summarykecamatan')->name('kecamatan');
        });

        Route::prefix('kelurahan')->group(function () {
            Route::get('/', 'Admin\MasterController@summarykelurahan')->name('kelurahan');
        });

        Route::prefix('kategori')->group(function () {
            Route::get('/', 'Admin\MasterController@summarykategori')->name('kategori');
        });

        Route::prefix('potensi')->group(function () {
            Route::get('/', 'Admin\MasterController@summarypotensi')->name('potensi');
        });
    });

});

