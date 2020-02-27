<?php
/**
 *
 * @package App\Http\Requests
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateAdminRequest
 */
class CreateAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'bail',
                'required',
                'max:50',
            ],
            'name_kana' => [
                'bail',
                'required',
                'max:50',
            ],
            'admin_code' => [
                'bail',
                'required',
                'max:20',
            ],
            'password' => [
                'bail',
                'required',
                'min:8',
                'max:25',
                Rule::unique('users')->where(function ($query) {
                    return $query->where('account_id', 1);
                        }),
            ],
            'role_id' => [
                'bail',
                'required',
                'max:1',
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
