<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equipe;

class EquipeFactory extends Factory
{
    protected $model = Equipe::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->company(),
            'stade' => $this->faker->city(),
            'logo' => 'default.png',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
