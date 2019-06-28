<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin;

/**
 * ダッシュボード
 */
class DashboardController extends AdminBaseController
{
    /**
     * ダッシュボード
     *
     * @return mixed
     */
    public function __invoke()
    {

        return view('admin.dashboard.index');
    }
}
