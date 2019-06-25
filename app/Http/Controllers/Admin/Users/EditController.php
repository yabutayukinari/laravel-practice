<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;

/**
 * 管理者編集
 */
class EditController extends Controller
{
    /**
     * 一覧画面取得
     *
     * @return mixed
     */
    public function __invoke()
    {

        return view('admin.admins.edit');
    }
}
