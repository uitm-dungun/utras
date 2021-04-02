<?php

namespace Database\Factories;

use App\Models\ActionHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActionHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ActionHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->realText(),
        ];
    }
}
