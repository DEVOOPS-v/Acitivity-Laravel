<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employees;
use App\Models\Departments;
use App\Models\Positions;

class EmployeesSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure there are departments and positions first
        if (Departments::count() === 0) {
            $this->call(DepartmentsSeeder::class);
        }

        if (Positions::count() === 0) {
            $this->call(PositionsSeeder::class);
        }

        // Now seed employees
        Employees::factory(30)->create();
    }
}
