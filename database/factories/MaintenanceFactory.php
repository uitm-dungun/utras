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
            'title' => $this->faker->sentence,
            'bill_total' => rand(50,50000),

            'description' => $this->faker->realText(),
            'location' => $this->faker->address,
            'vendor' => $this->faker->company,

            'invoice_image_path' => null,

            'date' => $this->faker->dateTime(),
        ];
    }
}
