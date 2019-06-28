<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Admins\Create;

use App\Http\Controllers\Controller;

/**
 * 管理者登録 入力画面
 */
class InputController extends Controller
{
    /** @var string VIEW_FILE テンプレートファイル  */
    const VIEW_FILE = 'admin.admins.create_input';

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
