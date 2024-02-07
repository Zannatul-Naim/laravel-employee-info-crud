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
            //
            'name' => fake()->name(),
            'job_title' => fake()->jobTitle(),
            'joining_date' => fake() -> date(),
            'salary' => fake()->randomFloat(2, 10000, 100000),
            'email' => fake()->optional()->email(),
            'mobile_no' => fake()->phoneNumber(),
            'address' => fake() ->address()
        ];
    }
}
