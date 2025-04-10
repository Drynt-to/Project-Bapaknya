<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Students;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Students::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nrp' => $this->faker->unique()->numberBetween(10000, 99999),
            'birth_date' => $this->faker->date(),
            'place_of_birth' => $this->faker->city,
            'nik' => $this->faker->unique()->numberBetween(10000, 99999),
        ];
    }
}
