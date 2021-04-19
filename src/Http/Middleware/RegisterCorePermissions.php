<?php

namespace Statamic\Http\Middleware;

use Closure;
use Facades\Statamic\Auth\CorePermissions;

class RegisterCorePermissions
{
    public function handle($request, Closure $next)
    {
        CorePermissions::boot();

        return $next($request);
    }
}
