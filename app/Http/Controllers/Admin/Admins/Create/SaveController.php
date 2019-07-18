<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Admins\Create;

use App\Entities\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateAdminRequest;

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
     * @param CreateAdminRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(CreateAdminRequest $request)
    {
        $form = $request->only(['name','name_kana','admin_code','password','role_id']);
        Log::info('管理者登録 開始', ['入力値' => $form]);
        Admin::create($form);
        Log::info('管理者登録 完了');

        return redirect()->route('admin::admins.list')->with('complete_message', __('create_complete_message',['content'=>'管理者']));
    }
}
