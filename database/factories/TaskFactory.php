<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title_en' => $this->faker->title(),
            'description' => $this->faker->text(),
            'worker' => $this->faker->name(),
            'hours' => $this->faker->randomNumber(),
            'order' => $this->faker->randomNumber(),
            'project_id' => $this->faker->unique()->randomNumber(),
            

        ];
    }
}