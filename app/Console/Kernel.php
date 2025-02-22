<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Définir les tâches planifiées.
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('matches:clean')->everyMinute()
            ->appendOutputTo(storage_path('logs/matches_clean.log')); // Ajoute un log pour voir si ça tourne
    }

    /**
     * Enregistrer les commandes Artisan.
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }

    protected $middleware = [
        \App\Http\Middleware\CleanOldMatches::class,
    ];
    
}
