<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Priority;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Priority::factory()->create([
            'name' => 'Normal',
        ]);

        Priority::factory()->create([
            'name' => 'Prioritario',
        ]);

        Priority::factory()->create([
            'name' => 'Urgente',
        ]);
    }
}
