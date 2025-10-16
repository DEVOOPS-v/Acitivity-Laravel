<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departments;

class DepartmentsSeeder extends Seeder
{
    public function run(): void
    {
        Departments::factory(30)->create();
    }
}
