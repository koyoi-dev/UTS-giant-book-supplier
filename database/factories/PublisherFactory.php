<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->unique()->company,
            "address" => $this->faker->address,
            "phone" => $this->faker->phoneNumber,
            "email" => $this->faker->companyEmail,
            "image" => $this->faker->imageUrl("250", "250")
        ];
    }
}
