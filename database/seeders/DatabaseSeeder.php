<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Department;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Department::factory(5)->create();
        User::factory(10)->create();
        Ticket::factory(10)->create();
        
        User::factory()->create([
            'name' => 'Gabriel Estacio',
            'email' => 'gestacio1310@gmail.com',
            'password' => bcrypt('123456'),
            'department_id' => 2
        ]);
    }
}
