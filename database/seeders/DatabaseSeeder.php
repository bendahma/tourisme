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

    \App\Models\User::factory(1)->create([
       'email' => 'admin@tourisme.com',
       'user_type' => 'super_admin'
    ]);
    \App\Models\User::factory(1)->create([
       'email' => 'abonne@tourisme.com',
       'user_type' => 'abonne'
    ]);
    \App\Models\User::factory(1)->create([
       'email' => 'client@tourisme.com',
       'user_type' => 'client'
    ]);
    \App\Models\Abonne::factory(1)->create([
       'user_id' => 2
    ]);
    \App\Models\Client::factory(1)->create([
       'user_id' => 3
    ]);
   //  $this->call([
   //      HotelSeeder::class,
   //  ]);
   //  $this->call([
   //       VolSeeder::class,
   //  ]);
   //  $this->call([
   //      VoyageSeeder::class,
   // ]);
}

}