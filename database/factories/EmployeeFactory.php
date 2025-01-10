<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "first_name" => fake()->firstName(),
            "last_name" => fake()->lastName(),
            "email" => fake()->email(),
            "faculty" => fake()->name("male"),
            "date_of_birth" => fake()->date("Y-m-d"),
            "graduation_year" => fake()->date("Y-m-d"),
            "contract_start_date" => fake()->date("Y-m-d"),
            "contract_end_date" => fake()->date("Y-m-d")
        ];
    }
}
