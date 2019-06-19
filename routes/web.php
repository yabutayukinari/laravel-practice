<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/11
 * @package Routes
 */

Route::group(['as' => 'front::', 'namespace' => 'Front'], function () {
    // トップページ
    Route::get('', 'TopController@getIndex')->name('top');
});

Route::group(['as' => 'admin::', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    // トップページ
    Route::get('', 'DashboardController@getIndex')->name('dashboard');

    Route::group(['as' => 'admins.', 'namespace' => 'Admins', 'prefix' => 'admins'], function () {
        Route::get('list', 'ListController@getIndex')->name('list');
        Route::get('create', 'CreateController@getIndex')->name('create');
        Route::get('edit', 'EditController@getIndex')->name('create');
    });
});
