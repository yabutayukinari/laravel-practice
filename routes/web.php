<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/11
 * @package Routes
 */

Route::group(['as' => 'front::', 'namespace' => 'Front', 'prefix' => 'front'], function () {
    // トップページ
    Route::get('', 'TopController')->name('top');
});

Route::group(['as' => 'admin::', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::group(['as' => 'auth.', 'namespace' => 'Auth', 'prefix' => 'auth'], function () {
        Route::get('login','LoginController')->name('login');
        Route::post('auth', 'AuthController')->name('auth');
    });

    // トップページ
    Route::get('', 'DashboardController')->name('dashboard');

    // 管理者管理
    Route::group(['as' => 'admins.', 'namespace' => 'Admins', 'prefix' => 'admins'], function () {
        Route::get('list', 'ListController')->name('list');
        Route::get('create', 'CreateController')->name('create');
        Route::get('edit', 'EditController')->name('edit');
    });

    // 会員管理
    Route::group(['as' => 'users.', 'namespace' => 'Users', 'prefix' => 'users'], function () {
        Route::get('list', 'ListController')->name('list');
        Route::get('edit', 'EditController')->name('edit');
    });
});
