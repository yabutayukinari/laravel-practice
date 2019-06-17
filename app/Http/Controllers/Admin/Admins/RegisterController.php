<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Admins;

use App\Http\Controllers\Controller;

/**
 * 管理者登録
 */
class RegisterController extends Controller
{
    /**
     * 一覧画面取得
     *
     * @return mixed
     */
    public function getIndex()
    {

        return view('admin.admins.Edit');
    }
}
