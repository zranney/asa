<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MatchEvent;
use App\Models\Equipe;

class MatchEventFactory extends Factory
{
    protected $model = MatchEvent::class;

    public function definition()
    {
        return [
            'equipe_1_id' => Equipe::factory(),
            'equipe_2_id' => Equipe::factory(),
            'score_equipe_1' => $this->faker->numberBetween(0, 5),
            'score_equipe_2' => $this->faker->numberBetween(0, 5),
            'date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'stade' => $this->faker->city(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
