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
            'user_id' => rand(1, 11),
            'department_id' => rand(1, 6),
            'priority_id' => rand(1, 3),

            'title' => $this->faker->sentence,
            'content' => $this->faker->text(600)
        ];
    }
}
