<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\ValidateCreateAdminRequest;

class ValidateApiCreateAdminRequest extends ValidateCreateAdminRequest
{
    use ApiFormRequestTrait;
}
