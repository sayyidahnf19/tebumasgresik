<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Fix for Vercel: auto-detect domain from request
        // This ensures asset() helper generates correct URLs on production
        $appUrl = config('app.url');
        $host = request()->getHost();
        $scheme = request()->getScheme();
        
        // If APP_URL is not properly set or doesn't match current host
        // (common issue on Vercel), use the request URL
        if (!$appUrl || 
            (strpos($appUrl, 'localhost') === false && 
             strpos($appUrl, $host) === false &&
             env('APP_ENV') === 'production')) {
            
            $properUrl = "{$scheme}://{$host}";
            URL::forceRootUrl($properUrl);
            config(['app.url' => $properUrl]);
        }
    }
}
