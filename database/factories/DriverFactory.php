<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'license_image_path' => null,
            'campus_code' => ['dgn','kt','bb'][rand(0,2)],
            'phone_number' => $this->faker->phoneNumber,
            'isAvailable' => [true,false][rand(0,1)],
        ];
    }
}
