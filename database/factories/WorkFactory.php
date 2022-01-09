<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = [
            'active',
            'passive'
        ];

        return [
            'user_id' => rand(1, 10),
            'priority_id' => rand(1, 3),
            'title' => $this->faker->sentence(rand(2, 8)),
            'description' => $this->faker->text(200),
            'text' => $this->faker->text(500),
            'status' => $status[rand(0, 1)],
            'deleted' => 0
        ];
    }
}
