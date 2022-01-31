<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Gabriel Estacio',
            'email' => 'gestacio1310@gmail.com',
            'password' => bcrypt('123456'),
            'department_id' => 1
        ]);

        User::factory()->create([
            'name' => 'Yorkis Estacio',
            'email' => 'yestacio@amanecer.com.ve',
            'password' => bcrypt('123456'),
            'department_id' => 2
        ]);

        User::factory()->create([
            'name' => 'Lilibeth Moreno',
            'email' => 'limoreno@amanecer.com.ve',
            'password' => bcrypt('123456'),
            'department_id' => 3
        ]);

        User::factory()->create([
            'name' => 'Miguel Vasquez',
            'email' => 'mvasquez@amanecer.com.ve',
            'password' => bcrypt('123456'),
            'department_id' => 4
        ]);

        User::factory()->create([
            'name' => 'Maria Jimenez',
            'email' => 'mjimenez@amanecer.com.ve',
            'password' => bcrypt('123456'),
            'department_id' => 5
        ]);

        User::factory()->create([
            'name' => 'Skarlet Gouveia',
            'email' => 'sgouveia@amanecer.com.ve',
            'password' => bcrypt('123456'),
            'department_id' => 6
        ]);
        
        User::factory(5)->create();
    }
}
