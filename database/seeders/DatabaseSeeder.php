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