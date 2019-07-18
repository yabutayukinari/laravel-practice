<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/7/13
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Admins;

use App\Http\Controllers\Controller;
use App\Services\SearchAdminService;
use Illuminate\Http\Request;

/**
 * 管理者一覧
 */
class ListController extends Controller
{
    /** @var SearchAdminService $searchAdminService */
    private $searchAdminService;

    //テンプレート
    const VIEW_FILE = 'admin.admins.list';

    /**
     * ListController constructor.
     * @param SearchAdminService $searchAdminService
     */
    public function __construct(SearchAdminService $searchAdminService)
    {
        $this->searchAdminService = $searchAdminService;
    }

    /**
     * 一覧画面取得
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $params['role_id'] = $request->role_id;

        $this->searchAdminService->setParameter($params);
        $adminList = $this->searchAdminService->execute();
        return view(self::VIEW_FILE, compact('adminList'));
    }
}
