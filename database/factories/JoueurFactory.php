<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Joueur;

class JoueurFactory extends Factory
{
    protected $model = Joueur::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'numero' => $this->faker->numberBetween(1, 99),
            'nationalite' => $this->faker->country(),
            'photo' => 'default.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
