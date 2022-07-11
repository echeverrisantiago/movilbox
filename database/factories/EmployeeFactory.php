<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'department_id' => $this->faker->numberBetween(1, 10),
            'salary' => $this->faker->numberBetween(908526, 6000000),
            'educationlevel_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
