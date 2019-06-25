<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;

/**
 * ログイン
 */
class LoginController extends Controller
{
    /**
     * ダッシュボード
     *
     * @return mixed
     */
    public function __invoke()
    {
        return view('admin.auth.login', ['isAuthError' => session('is_auth_error')]);
    }
}
