<?php

namespace Database\Factories;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trip::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'purpose' => $this->faker->sentence,
            'depart_location' => $this->faker->address,
            'return_location' => $this->faker->address,
            'depart_at' => $this->faker->time(),
            'return_at' => $this->faker->time(),
            'travel_distance' => rand(100, 1000),
            'approved_at' => $this->faker->time(),
        ];
    }
}
