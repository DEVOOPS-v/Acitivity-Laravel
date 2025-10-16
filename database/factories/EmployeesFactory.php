<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Departments;
use App\Models\Positions;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'salary' => $this->faker->numberBetween(20000, 80000),

            // Foreign keys (will be assigned from seeded departments/positions)
            'department_id' => Departments::inRandomOrder()->first()?->id ?? Departments::factory(),
            'position_id' => Positions::inRandomOrder()->first()?->id ?? Positions::factory(),
        ];
    }
}
