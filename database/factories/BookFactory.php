<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'author' => $this->faker->name(),
            'publisher' => 'Gramedia',
            'number_of_pages' => mt_rand(100, 900)
        ];
    }
}
