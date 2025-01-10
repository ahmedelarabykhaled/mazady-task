<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(),
            "description" => fake()->sentence(15),
            "employee_ids" => [
                fake()->numberBetween(1, 50),
                fake()->numberBetween(1, 50),
                fake()->numberBetween(1, 50),
            ],
            "salary_id" => rand(1, 50)
        ];
    }
}
