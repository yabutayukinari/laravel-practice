<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Admins\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCreateAdminRequest;

/**
 * 管理者登録 登録処理
 *
 * 登録処理だけのためテンプレートファイルなし
 */
class SaveController extends Controller
{
    /** @var string VIEW_FILE テンプレートファイル  */
    const VIEW_FILE = '';

    /**
     * 一覧画面取得
     *
     * @return mixed
     */
    public function __invoke(ValidateCreateAdminRequest $request)
    {
        return view('admin.admins.create');
    }
}
