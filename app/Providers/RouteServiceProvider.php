<?php

use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;
use Illuminate\Support\Facades\Route;

// In the RouteServiceProvider class
/*protected function mapApiRoutes()
{
    Route::middleware([
        'api',
        EnsureFrontendRequestsAreStateful::class,
        'throttle:api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ])
    ->prefix('api')
    ->group(base_path('routes/api.php'));
}*/
protected function mapWebRoutes()
{
    Route::middleware('web')
         ->namespace($this->namespace)
         ->group(base_path('routes/web.php'));
}

protected function mapApiRoutes()
{
    Route::middleware('api')
         ->namespace($this->namespace)
         ->group(base_path('routes/api.php'));
}