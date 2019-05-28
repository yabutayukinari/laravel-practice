<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * ダッシュボード
 */
class DashboardController extends Controller
{
    /**
     * ダッシュボード
     *
     * @return mixed
     */
    public function getIndex()
    {

        return view('admin.dashboard.index');
    }
}
