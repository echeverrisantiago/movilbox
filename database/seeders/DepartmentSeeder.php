<?php

namespace Database\Seeders;

use App\Models\Department;
use Database\Factories\DepartmentFactory;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::factory()->count(10)->create();
    }
}
