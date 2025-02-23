<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Partenaire;

class PartenaireFactory extends Factory
{
    protected $model = Partenaire::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->company(),
            'logo' => 'default.png',
            'site_web' => $this->faker->url(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
