<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'task' => $this->faker->word(),
            'status' => $this->faker->unique()->word(),
            'created_at' => now(),
            
        ];
    }

}
