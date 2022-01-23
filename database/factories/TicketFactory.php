<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'department_id' => rand(1, 2),

            'title' => $this->faker->sentence,
            'content' => $this->faker->text(200)

        ];
    }
}
