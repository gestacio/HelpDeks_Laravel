<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::factory()->create([
            'name' => 'Sistemas',
        ]);
        Department::factory()->create([
            'name' => 'Administración',
        ]);
        Department::factory()->create([
            'name' => 'Servicios',
        ]);
        Department::factory()->create([
            'name' => 'Ventas',
        ]);
        Department::factory()->create([
            'name' => 'Cobranzas',
        ]);
        Department::factory()->create([
            'name' => 'Call-Center',
        ]);
    }
}
