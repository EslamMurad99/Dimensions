<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CspMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Temporarily disabled CSP for testing
        // Add CSP header to all responses
        // $response->headers->set('Content-Security-Policy', 
        //     "upgrade-insecure-requests; " .
        //     "default-src 'self' https:; " .
        //     "script-src 'self' 'unsafe-inline' https:; " .
        //     "style-src 'self' 'unsafe-inline' https:; " .
        //     "img-src 'self' data: https:; " .
        //     "font-src 'self' data: https:;"
        // );

        return $response;
    }
}
