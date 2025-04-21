<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Où rediriger les utilisateurs après authentification.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Définition des bindings de route, des middlewares, etc.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            // Routes API (routes/api.php)
            Route::prefix('api')
                 ->middleware('api')
                 ->group(base_path('routes/api.php'));

            // Routes Web (routes/web.php)
            Route::middleware('web')
                 ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configuration du rate limiting pour l'API.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            // 60 requêtes/minute par utilisateur ou IP
            return Limit::perMinute(60)->by(
                $request->user()?->id ?: $request->ip()
            );
        });
    }
}
