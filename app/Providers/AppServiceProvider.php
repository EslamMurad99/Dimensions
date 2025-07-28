<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        app()->setLocale(session('locale', config('app.locale')));
        
        // Force HTTPS for all asset URLs in production
        if (env('APP_ENV') === 'production' || env('FORCE_HTTPS') === 'true') {
            $this->forceHttpsForAssets();
        }
        

    }
    
    /**
     * Force HTTPS for asset URLs
     */
    private function forceHttpsForAssets(): void
    {
        // Override the asset helper to always use HTTPS
        \Illuminate\Support\Facades\URL::forceScheme('https');
        
        // Also force HTTPS for the application URL
        if (config('app.url') && !str_starts_with(config('app.url'), 'https://')) {
            config(['app.url' => str_replace('http://', 'https://', config('app.url'))]);
        }
    }
    

}
