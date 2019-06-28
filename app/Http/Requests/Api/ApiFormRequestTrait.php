<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

/**
 * FormRequestのバリデート結果をJSONに変換して返却するトレイト
 */
trait ApiFormRequestTrait
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

    protected function failedValidation( Validator $validator )
    {
        $response['data']    = [];
        $response['status']  = 'NG';
        $response['summary'] = 'Failed validation.';
        $response['errors']  = $validator->errors()->toArray();
        $response['errorMessages']  = $validator->errors()->all();


        throw new HttpResponseException(
            response()->json( $response, 422 )
        );
    }
}