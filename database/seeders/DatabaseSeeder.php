<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Joueur;
use App\Models\Equipe;
use App\Models\MatchEvent;
use App\Models\Actualite;
use App\Models\Partenaire;
use App\Models\Galerie;
use App\Models\CalendrierEvent;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Joueur::factory(20)->create();
        Equipe::factory(10)->create();
        MatchEvent::factory(30)->create();
        Actualite::factory(15)->create();
        Partenaire::factory(5)->create();
        Galerie::factory(25)->create();
        CalendrierEvent::factory(10)->create();
        User::factory(5)->create();

        Admin::create([
            'email' => 'admin@example.com',
            'password' => Hash::make('motdepasse'),
        ]);
    }
}
