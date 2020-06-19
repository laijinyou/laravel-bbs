<?php

namespace App\Http\Middleware;

use Closure;

class AcceptHeader
{
    // 设置 accept  响应头为 application/json 格式
    public function handle($request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');

        return $next($request);
    }
}
