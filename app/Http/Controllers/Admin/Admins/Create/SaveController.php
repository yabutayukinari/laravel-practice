<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Admins\Create;

use App\Entities\Admin;
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
     * @param ValidateCreateAdminRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(ValidateCreateAdminRequest $request)
    {
        $form = $request->only(['name','name_kana','admin_code','password','role_id']);
        Admin::create($form);

        return redirect()->route('admin::admins.list')->with('complete_message', __('create_complete_message',['content'=>'管理者']));
    }
}
