<?php

namespace App\Providers;

use App\Models\Calendrier_event;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);
        $calendrier_event = Calendrier_event::all();
        View::share('calendrier_event', $calendrier_event);
    }
}
