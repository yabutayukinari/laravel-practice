<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Admins;

use App\Entities\Admin;
use App\Http\Controllers\Controller;

/**
 * 削除処理
 */
class DeleteController extends Controller
{
    //テンプレート
    const VIEW_FILE = '';

    /**
     * 削除処理
     *
     * @param Admin $admin
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function __invoke(Admin $admin)
    {
        $admin->delete();
        return view(self::VIEW_FILE);
    }
}
