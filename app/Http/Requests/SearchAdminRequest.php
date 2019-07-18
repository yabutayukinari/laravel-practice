<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/7/18
 * @package
 */

/**
 *
 * @package App\Http\Requests
 */

namespace App\Http\Requests;

use App\Entities\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class SearchAdminRequest
 */
class SearchAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_or_name_kana' => [
                'bail',
                'max:50',
            ],
            'role_id' => [
                'bail',
                'integer',
                'max:1',
                Rule::in(array_keys(Admin::ROLES)),
            ],
        ];
    }

    /**
     * Set custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return __('admin/admins/attributes');
    }
}
