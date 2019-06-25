<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;

/**
 * 認証処理
 */
class AuthController extends Controller
{
    /**
     * 認証処理
     *
     * @return mixed
     */
    public function __invoke()
    {

        return redirect(route('Admin::dashboard'));
    }
}
