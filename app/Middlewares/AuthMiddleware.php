<?php

namespace App\Middlewares;

use Solisty\Http\Middleware;
use Solisty\Http\Request;

class AuthMiddleware extends Middleware
{
    public function handle(Request $request)
    {
        ppd('not auth');
        if (!auth()->check()) {
        }
    }
}