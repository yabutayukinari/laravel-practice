<?php
/**
 * @package App\Policies
 */

namespace App\Policies;

use App\Entities\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class AdminPolicy
 */
class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * 「システム管理者・管理者」は全ての操作が可能
     * @param Admin $admin
     * @return bool|null
     */
    public function before(Admin $admin)
    {
        if ($admin->role_id === Admin::ROLE_ID_SYSTEM_MASTER || $admin->role_id === Admin::ROLE_ID_ADMIN_MASTER) {
            return true;
        }

        return null;
    }

    /**
     * 登録画面
     *
     * @param Admin $admin
     * @return void
     */
    public function create(Admin $admin)
    {
    }

    /**
     * 一覧画面
     *
     * @param Admin $admin
     * @return void
     */
    public function list(Admin $admin)
    {
    }
}
