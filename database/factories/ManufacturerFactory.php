<?php

namespace Database\Factories;

use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manufacturer>
 */
class ManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Manufacturer::class;

    public function definition(): array
    {   

        return [
            // фабрика для заполнения фейковыми данными
            'mark_id' => $this->faker->randomElement( [1, 2, 3]),
            'name' => $this->faker->randomElement(['Peugeot', 'Volvo', 'Mazda']),
            'country' => $this->faker->country,
        ];
    }
}
