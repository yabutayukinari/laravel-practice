<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/11
 * @package Routes
 */

Route::group(['as' => 'front::'], function () {
    // トップページ
    Route::get('', 'TopController@getIndex')->name('top');
});
