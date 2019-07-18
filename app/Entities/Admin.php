<?php
/**
 * @package App\Entities
 */

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admin
 *
 */
class Admin extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    const ROLE_ID_SYSTEM_MASTER = 1;
    const ROLE_ID_ADMIN_MASTER = 2;
    const ROLE_ID_EDITOR = 3;

    const ROLES = [
      self::ROLE_ID_SYSTEM_MASTER => 'システム管理者',
      self::ROLE_ID_ADMIN_MASTER => '管理者',
      self::ROLE_ID_EDITOR => '編集者'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'name_kana', 'admin_code', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * @return mixed
     */
    public function getRoleNameAttribute()
    {
        return self::ROLES[$this->role_id];
    }


}
