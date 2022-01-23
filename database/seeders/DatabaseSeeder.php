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
        User::factory(10)->create();
        Ticket::factory(10)->create();
        Department::factory(2)->create();

        User::factory()->create([
            'name' => 'Gabriel Estacio',
            'email' => 'gestacio1310@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        
    }
}
