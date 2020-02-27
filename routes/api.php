<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['as' => 'admin::', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    // 管理者管理
    Route::group(['as' => 'admins.', 'namespace' => 'Admins', 'prefix' => 'admins'], function () {
        Route::group(
            ['as' => 'create.', 'namespace' => 'Create', 'prefix' => 'create'],
            function () {
                Route::post('validate', 'ValidateController')->name('validate');
                Route::post('save', 'SaveController')->name('save');
            });
        // 削除
        Route::delete('delete/{admin}', 'DeleteController')->name('delete');
    });
});
