<?php
/**
 * @copyright Copyright yabuta
 * @since     2019/3/11
 * @package App\Http\Controllers\Front
 */

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;


/**
 * Class TopController
 */
class TopController extends Controller
{
    public function getIndex()
    {
        return view('front.top.index');
    }
}
