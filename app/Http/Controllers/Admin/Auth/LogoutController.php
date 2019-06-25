<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * ログアウト
 */
class LogoutController extends Controller
{
    /**
     * ダッシュボード
     *
     * @return mixed
     */
    public function __invoke()
    {
        Auth::logout();

        return redirect()->route('admin::auth.login');
    }
}
