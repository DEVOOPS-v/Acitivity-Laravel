<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Departments;
use App\Models\Positions;
use App\Models\Employees;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Optional: create a test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Call other seeders
      $this->call([
    DepartmentsSeeder::class,
    PositionsSeeder::class,
    EmployeesSeeder::class,
]);

    }
}
