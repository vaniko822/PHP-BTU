<?php

namespace App\Http\Middleware;

use Closure;

class NameCheckMiddleware
{
    public function handle($request, Closure $next)
    {
        $name = $request->input('name');

        if ($name !== 'my-super-middleware') {
            return redirect('/error');
        }

        return $next($request);
    }
}
