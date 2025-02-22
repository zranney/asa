<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\MatchEvent;

class CleanOldMatches
{
    public function handle($request, Closure $next)
    {
        $now = Carbon::now();

        MatchEvent::where(function ($query) use ($now) {
                $query->where('date', '<', $now->toDateString())
                      ->orWhere(function ($q) use ($now) {
                          $q->where('date', '=', $now->toDateString())
                            ->where('heure', '<=', $now->toTimeString());
                      });
            })
            ->delete();

        return $next($request);
    }
}
