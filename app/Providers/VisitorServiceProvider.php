<?php

namespace App\Providers;

use App\Models\Visitor;
use Illuminate\Support\Facades\View;
use App\Http\Middleware\TrackVisitors;
use Illuminate\Support\ServiceProvider;

class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // $this->app['router']->pushMiddlewareToGroup('web', TrackVisitors::class);
        View::share(
            'visitorCount',
            Visitor::count()
        );
    }
}
