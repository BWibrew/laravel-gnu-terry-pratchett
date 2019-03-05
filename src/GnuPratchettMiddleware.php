<?php

namespace BWibrew\GnuPratchett;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GnuPratchettMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return Response
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof Response) {
            $response->header('X-Clacks-Overhead', 'GNU Terry Pratchett');
        }

        return $response;
    }
}
