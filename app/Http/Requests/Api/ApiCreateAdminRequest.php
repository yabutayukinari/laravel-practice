<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\CreateAdminRequest;

class ApiCreateAdminRequest extends CreateAdminRequest
{
    use ApiFormRequestTrait;
}
