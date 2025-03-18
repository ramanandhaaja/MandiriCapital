<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentView;
use Illuminate\Contracts\View\View;
use App\Models\HeroMaster;
use App\Models\HeroSectionCategory;
use Illuminate\Support\Facades\View as ViewFacade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Security headers are now handled by SecurityHeaders middleware

        // Implement Content-Security-Policy (CSP)
        $cspDirectives = [
            'default-src' => "'self'",
            'script-src' => "'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://code.jquery.com https://www.google-analytics.com",
            'style-src' => "'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com",
            'img-src' => "'self' data: https: http:",
            'font-src' => "'self' https://fonts.gstatic.com https://cdn.jsdelivr.net",
            'connect-src' => "'self'",
            'frame-src' => "'self'",
            'object-src' => "'none'",
            'base-uri' => "'self'",
            'form-action' => "'self'",
            'frame-ancestors' => "'none'", // This reinforces X-Frame-Options for modern browsers
            'upgrade-insecure-requests' => '',
        ];

        $cspHeader = '';
        foreach ($cspDirectives as $directive => $value) {
            if (!empty($value)) {
                $cspHeader .= $directive . ' ' . $value . '; ';
            } else {
                $cspHeader .= $directive . '; ';
            }
        }

        // Set the CSP header
        $this->app['request']->headers->set('Content-Security-Policy', trim($cspHeader));

        // Set secure cookie configurations
        config([
            'session.http_only' => true,         // Enable 'HttpOnly' attribute
            'session.same_site' => 'lax',        // Set SameSite to 'lax' instead of 'strict' to allow some cross-site requests
        ]);

        // Only set secure flag if using HTTPS
        if (request()->secure()) {
            config(['session.secure' => true]);
        }

        // Regenerate session ID periodically but only for non-form submissions
        // This prevents CSRF token mismatches during form submissions
        if (!request()->isMethod('POST') && session()->has('last_regenerated_at')) {
            $lastRegenerated = session('last_regenerated_at');
            $sixHoursAgo = time() - (6 * 3600); // 6 hours instead of 1 hour

            if ($lastRegenerated < $sixHoursAgo) {
                session()->regenerate(false); // false = don't invalidate the old session
                session(['last_regenerated_at' => time()]);
            }
        } elseif (!session()->has('last_regenerated_at')) {
            session(['last_regenerated_at' => time()]);
        }

        // Your existing code...
        FilamentView::registerRenderHook(
            'panels::auth.login.form.after',
            fn(): View => view('filament.login_extra')
        );

        // Share menu data with all views
        ViewFacade::composer('*', function ($view) {
            $masterData = HeroMaster::first();
            $menuCategory = HeroSectionCategory::all();

            $view->with(compact('masterData', 'menuCategory'));
        });
    }
}
