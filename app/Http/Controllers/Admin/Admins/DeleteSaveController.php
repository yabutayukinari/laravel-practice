<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Admins;

use App\Http\Controllers\Controller;

/**
 * 管理者一覧
 */
class DeleteSaveController extends Controller
{
    //テンプレート
    const VIEW_FILE = 'admin.admins.list';

    /**
     * 一覧画面取得
     *
     * @return mixed
     */
    public function __invoke()
    {

        return view(self::VIEW_FILE);
    }
}
