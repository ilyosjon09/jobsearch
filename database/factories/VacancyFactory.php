<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'company_name' => $this->faker->company(),
            'description' => $this->faker->text(),
            'salary_min' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'salary_max' => $this->faker->numberBetween($min = 10000, $max = 12000),
        ];
    }
}
