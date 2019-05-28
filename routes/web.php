<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/11
 * @package Routes
 */

Route::group(['as' => 'front::', 'namespace' => 'front'], function () {
    // トップページ
    Route::get('', 'TopController@getIndex')->name('top');
});

Route::group(['as' => 'admin::', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    // トップページ
    Route::get('', 'DashboardController@getIndex')->name('top');
});
