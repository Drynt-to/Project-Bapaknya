<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Units;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Units>
 */
class UnitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Units::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'unit_level' => $this->faker->randomDigit(),
            'is_active' => true,
        ];
    }
}
