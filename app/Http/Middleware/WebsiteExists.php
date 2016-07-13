<?php

namespace App\Http\Middleware;

use App\Website;
use Closure;

class WebsiteExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Website::where('domain', $request->route('domain'))->count() == 0) {
            abort(404);
        }
        return $next($request);
    }
}
