<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\MatchEvent;
use Illuminate\Console\Command;

class DeleteOldMatches extends Command {
    protected $signature = 'matches:clean';
    protected $description = 'Supprime tous les matchs passés';

    public function handle() {
        $now = Carbon::now();

        // Supprimer les matchs passés
        MatchEvent::where(function ($query) use ($now) {
                $query->where('date', '<', $now->toDateString()) // Matchs avant aujourd'hui
                      ->orWhere(function ($q) use ($now) {
                          $q->where('date', '=', $now->toDateString()) // Matchs aujourd'hui
                            ->where('heure', '<=', $now->toTimeString()); // Mais l'heure est déjà passée
                      });
            })
            ->delete();

        $this->info('Matchs passés supprimés.');
    }
}
