<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/7/13
 * @package
 */

namespace App\Services;

use App\Entities\Admin;

/**
 * 管理者削除
 */
class DeleteAdminService extends Service
{
    /** @var array */
    private $conditions = [];


    /**
     * 検索条件をセット
     *
     * @param array $conditions 検索条件
     *
     * @return void
     */
    public function setParameter(array $conditions)
    {
        $this->conditions['role_id'] = $conditions['role_id'];
    }

    /**
     * 管理者一覧を取得
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function execute()
    {
        $query = Admin::query();
        $query->where('role_id', '!=', Admin::ROLE_ID_SYSTEM_MASTER);
        if (isset($this->conditions['role_id']) && strlen($this->conditions['role_id']) > 0) {
            $query->where('role_id', '=', $this->conditions['role_id']);
        }
        return $query->get();
    }
}
