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
        Route::get('login', 'LoginController')->name('login');
        Route::post('', 'AuthController')->name('auth');
    });
    Route::group(['middleware' => 'auth'], function () {
        // トップページ
        Route::get('', 'DashboardController')->name('dashboard');
        Route::group(['as' => 'auth.', 'namespace' => 'Auth', 'prefix' => 'auth'], function () {
            Route::get('logout', 'LogoutController')->name('logout');
        });

        // 管理者管理
        Route::group(['as' => 'admins.', 'namespace' => 'Admins', 'prefix' => 'admins'], function () {
            // 一覧
            Route::get('list', 'ListController')->name('list')->middleware('can:list,'.\App\Entities\Admin::class);

            // 新規登録
            Route::group(
                ['as' => 'create.', 'namespace' => 'Create', 'prefix' => 'create',
                    'middleware' => 'can:create,'.\App\Entities\Admin::class],
                function () {
                    Route::get('start', 'StartController')->name('start');
                    Route::get('input', 'InputController')->name('input');
                    Route::post('validate', 'ValidateController')->name('validate');
                    Route::get('save', 'SaveController')->name('save');
                }
            );

            // 編集
            Route::group(['as' => 'edit.', 'namespace' => 'Edit', 'prefix' => 'edit'], function () {
                Route::get('input', 'InputController')->name('input');
            });

            // 削除
            Route::get('delete/{admin}', 'DeleteController')->name('delete');
        });

        // 会員管理
        Route::group(['as' => 'users.', 'namespace' => 'Users', 'prefix' => 'users'], function () {
            Route::get('list', 'ListController')->name('list');
            Route::get('edit', 'EditController')->name('edit');
        });


    });
});

