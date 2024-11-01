<?php

namespace Database\Factories;

use App\Models\Body;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Body>
 */
class BodyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Body::class;

    public function definition(): array
    {
        return [
            //
            'body_type' => $this->faker->randomElement(['sedan', 'hatchback', 'liftback', 'crossover', 'сoupe']),
            'mark_id' => $this->faker->randomElement([1,2,3]),
        ];
    }
}
