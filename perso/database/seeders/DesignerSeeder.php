<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert([
            [
                'name' => 'Jérôme Alquié',
                'year_born' => 1975,
                'nationality' => 'Française',

            ],
            [
                'name' => 'Roger Sweet',
                'year_born' =>  1935,
                'nationality' => 'Américain',
            ],
            [
                'name' => 'Hergé',
                'year_born' => 1907,
                'nationality' => 'Belge',
            ],
        ]);
    }
}
