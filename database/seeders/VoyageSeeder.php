<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoyageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table("voyages")->insert([
            ['nom_v'=>'voyMN',
            'duree'=>'2h',
            'max_perso'=>111,
            'date_depart'=>'2022-02-04',
            'date_arrivee'=>'2022-04-04',
            'min_age'=>1,
            'prix'=>12000,
            'descriptrion'=>"parmi les meilleurs voyage dans le monde",
            'facilites'=>'wifi..',
            'abonne_id'=>1,

            ],

        ]);
    }
}
