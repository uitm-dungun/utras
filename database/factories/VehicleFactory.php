<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($this->faker);

        return [
            'plate_number' => rand(0,9000),
            'type' => ['car','bus','truck'][rand(0,2)],
            'located_at_campus_code' => $this->faker->address,
            'is_available' => [true, false][rand(0,1)],
            'grant_image_path' => null,
            'puspakom_expiry' => $this->faker->dateTime,
            'roadtax_expiry' => $this->faker->dateTime,
            'insurance_expiry' => $this->faker->dateTime,
        ];
    }
}
