<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

/**
 * 認証処理
 */
class AuthController extends Controller
{
    /**
     * 認証処理
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        Log::info('認証開始');
        // 認証
        if (! Auth::guard('admins')->attempt($request->only('admin_code', 'password'))) {
            Log::info('認証失敗', ['admin_code' => $request->input('admin_code')]);
            Session::flash('is_auth_error', true);
            return redirect()->route('admin::auth.login');
        }

        Log::info('認証成功', ['session_id'=> Session::getId()]);
        return redirect()->intended(route('admin::dashboard'));
    }
}
