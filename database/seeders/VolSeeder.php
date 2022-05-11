<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("vols")->insert([
            ['nom_compa'=>'vol_compa',
            'Date_D'=>'2022-04-04',
            'Date_A'=>'2022_05-05',
            'type_baguage'=>'bag',
            'classage_vol'=>'busniss',
            'nombre_perso'=>3,
            'categorie_voyageurs'=>'adulte',
            'abonne_id'=>1,

            ],
        ]);
    }
}
