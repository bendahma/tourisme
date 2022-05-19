<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         'telephone' => '0666930103' ,
         'adresse' => 'N° 88 cite la mitie ain temouchent' ,
         'wilaya' => 'Ain Temouchent' ,
         'date_naissance' => '14-07-1999' ,
        ];
    }
}
