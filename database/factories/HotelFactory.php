<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_h' => $this->faker->name(),
            'adresse_h' => $this->faker->address(),
            'photo_h' => "photo",
            'abonne_id' => 1,


        ];
    }
}
