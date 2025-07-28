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
        
        // Force HTTPS in production
        if (env('APP_ENV') === 'production' && !request()->secure()) {
            $this->forceHttps();
        }
    }
    
    /**
     * Force HTTPS redirection
     */
    private function forceHttps(): void
    {
        if (request()->isMethod('get')) {
            $url = request()->getRequestUri();
            $secureUrl = 'https://' . request()->getHost() . $url;
            
            if (request()->url() !== $secureUrl) {
                redirect()->secure($url)->send();
                exit;
            }
        }
    }
}
