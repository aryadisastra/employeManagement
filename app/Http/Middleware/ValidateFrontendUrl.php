<?php

namespace App\Http\Middleware;

use App\Models\Pesantren;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateFrontendUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $domain = $request->getHost();
        $count = Pesantren::where('website_domain', $domain)->count();
        if ($count == 0) {
            abort(404);
        }

        return $next($request);
    }
}
