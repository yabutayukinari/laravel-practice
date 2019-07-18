<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Admins\Create;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


/**
 * 管理者登録 初期処理
 *
 * 初期処理だけのためテンプレートファイルなし
 */
class StartController extends Controller
{
    /** @var string VIEW_FILE テンプレートファイル  */
    const VIEW_FILE = '';

    /**
     * 一覧画面取得
     *
     * @return mixed
     */
    public function __invoke()
    {

        // セッション削除
        Session::forget(config('product.admins.create_admin_session'));
        return redirect()->route('admin::admins.create.input');
    }
}
