<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/15
 * @package Admin
 */

namespace App\Http\Controllers\Admin\Admins\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ValidateApiCreateAdminRequest;

/**
 * ajaxからのバリデーションチェック
 */
class ValidateController extends Controller
{
    /**
     * ajaxからのバリデーションチェック
     *
     * @return mixed
     */
    /**
     * @param ValidateApiCreateAdminRequest $request
     * @return mixed|void
     */
    public function __invoke(ValidateApiCreateAdminRequest $request)
    {
        return response()->json(['result'=>true]);
    }
}
