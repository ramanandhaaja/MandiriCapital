<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SecurityHeaders
{
    /**
     * List of external resources with their SRI hashes
     * Generate these hashes using: https://www.srihash.org/
     */
    private $sriResources = [
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' => 
            'sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js' => 
            'sha384-g4NTh/Iv5PPU4xPyhEWqPcwtNXOvdaDI8LLnyYfyNZOjKJeYQyjzQ9X5275eBjpt',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js' => 
            'sha384-Z3REaz79l2IaAZqJsSABtTbhjgOUYyV3p90XNnAPCSHg3EMTz1fouunq9WZRtj3d'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /** @var \Illuminate\Http\Response $response */
        $response = $next($request);

        if (method_exists($response, 'header')) {
            // Build SRI integrity sources
            $sriHashes = [];
            foreach ($this->sriResources as $url => $hash) {
                $sriHashes[] = "'sha384-{$hash}'";
            }
            $sriHashString = implode(' ', $sriHashes);

            // Content Security Policy (CSP) with SRI
            $cspDirectives = [
                "default-src" => "'self' fonts.googleapis.com fonts.gstatic.com cdnjs.cloudflare.com",
                "script-src" => "'self' {$sriHashString} cdnjs.cloudflare.com",
                "style-src" => "'self' {$sriHashString} fonts.googleapis.com fonts.gstatic.com cdnjs.cloudflare.com",
                "img-src" => "'self' data: blob: fonts.googleapis.com",
                "font-src" => "'self' data: fonts.googleapis.com fonts.gstatic.com cdnjs.cloudflare.com",
                "connect-src" => "'self' fonts.googleapis.com cdnjs.cloudflare.com",
                "media-src" => "'self'",
                "object-src" => "'none'",
                "frame-src" => "'self'",
                "frame-ancestors" => "'self'",
                "form-action" => "'self'",
                "base-uri" => "'self'",
                "require-sri-for" => "script style"
            ];

            $cspHeader = '';
            foreach ($cspDirectives as $directive => $value) {
                if (!empty($value)) {
                    $cspHeader .= $directive . ' ' . $value . '; ';
                } else {
                    $cspHeader .= $directive . '; ';
                }
            }

            // Set security headers
            $response->header('Content-Security-Policy', trim($cspHeader));
            $response->header('X-Content-Type-Options', 'nosniff');
            $response->header('X-Frame-Options', 'SAMEORIGIN');
            $response->header('X-XSS-Protection', '1; mode=block');

            if ($request->secure()) {
                $response->header(
                    'Strict-Transport-Security',
                    'max-age=31536000; includeSubDomains; preload'
                );
            }
        }

        return $response;
    }
}
