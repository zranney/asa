<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Actualite;

class ActualiteFactory extends Factory
{
    protected $model = Actualite::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(6),
            'contenu' => $this->faker->paragraph(4),
            'image' => 'default.jpg',
            'date_publication' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
