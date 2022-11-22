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
            "title" => $this->faker->sentence(3),
            "author" => $this->faker->name,
            "year" => $this->faker->year('year'),
            "synopsis" => $this->faker->paragraphs(3, true),
            "image" => $this->faker->imageUrl("1000", "1000")
        ];
    }
}
