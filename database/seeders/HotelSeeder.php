<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            ['nom_h'=>'ibis',
            'adresse_h'=>'tlemcen',
            'photo_h'=>'photo',
            'abonne_id'=>1,
        ],
        ['nom_h'=>'Renaissance',
            'adresse_h'=>'tlemcen',
            'photo_h'=>'photo',
            'abonne_id'=>1,
        ],
        ['nom_h'=>"hotel islam",
            'adresse_h'=>'tlemcen',
            'photo_h'=>'photo',
            'abonne_id'=>1,
        ],

        ]);
    }
}
