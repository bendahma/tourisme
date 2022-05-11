<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AbonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abonnes')->insert([
            ['nom'=>"skilink Travel",
            'mot_passe'=>'skilink0000Travel',
            'email'=>'www.skilink-travel.com',
            'telephone'=>'041834624',
            'adresse'=>'oran',
            'logo'=>'skilink',
            'num_rc'=>"85.02.02-002.00",
            ],

        ]);
    }
}
