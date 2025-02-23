<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Galerie;

class GalerieFactory extends Factory
{
    protected $model = Galerie::class;

    public function definition()
    {
        return [
            'image' => 'default.jpg',
            'description' => $this->faker->sentence(8),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
