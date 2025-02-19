<?php

namespace App\Providers;

use App\Models\Actualite;
use App\Models\Calendrier_event;
use App\Models\Classement;
use App\Models\MatchEvent;
use App\Models\Rencontre;
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

        View::composer('*', function ($view) {
            $matchs = MatchEvent::orderBy('date', 'desc')->orderBy('heure', 'desc')->get();
            $view->with('matchs', $matchs);
        });
        View::composer('*', function ($view) {
            $rencontres = Rencontre::with(['equipe1', 'equipe2'])
                ->orderBy('created_at', 'desc') // Trier par date
                ->take(3) // Prendre les 5 derniers matchs
                ->get();
    
            $view->with('rencontres', $rencontres);
        });

        View::composer('*', function ($view) {
            $actualites = Actualite::orderBy('date_publication', 'desc')->get();
            $view->with('actualites', $actualites);
        });
    }
}
