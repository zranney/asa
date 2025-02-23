<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CalendrierEvent;

class CalendrierEventFactory extends Factory
{
    protected $model = CalendrierEvent::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(5),
            'date' => $this->faker->dateTimeBetween('-6 months', '+6 months'),
            'lieu' => $this->faker->city(),
            'description' => $this->faker->paragraph(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
