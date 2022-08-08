<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Generator as Faker;
use Illuminate\Support\Str;

class DireccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->unique()->url(),
            'short_url' => Str::random(6),
            'estado' => '1',
        ];
    }
}
