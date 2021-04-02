<?php

namespace Database\Factories;

use App\Models\Maintenance;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintenanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Maintenance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bill_total' => rand(50,50000),
            'location' => $this->faker->address,
            'invoice_image_path' => null,
            'description' => $this->faker->realText(),
            'date' => $this->faker->dateTime,
        ];
    }
}
