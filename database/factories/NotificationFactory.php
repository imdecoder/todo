<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
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
            'title' => $this->faker->jobTitle(),
            'text' => $this->faker->text(100),
            'status' => $status[rand(0, 1)],
            'deleted' => 0
        ];
    }
}
