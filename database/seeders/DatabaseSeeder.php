<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
   {
       /* App\Hotel::create(

            [
            'nom_h'=> 'hotel mouna',
            'adresse_h'=> 'tlemcen',
            'photo_h'=> ' ',
            ]
        );
    
        // \App\Models\User::factory(10)->create();
    }*/
    $this->call([
        HotelSeeder::class,
    ]);
    $this->call([
         VolSeeder::class,
    ]);
    $this->call([
        VoyageSeeder::class,
   ]);
}

}