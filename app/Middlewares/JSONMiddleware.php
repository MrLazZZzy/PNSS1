<?php

namespace Middlewares;

use Exception;
use Src\Request;
use Src\Session;

class JSONMiddleware
{
    public function handle(Request $request): Request
    {
        return $request;
    }
}
