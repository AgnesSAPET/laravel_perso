<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Albator (le Capitaine Corassaire)',
                'cartoon' => 'Albator',
                'creation_year' => 1977,
                'designer_id' => 1,
            ],
            [
                'name' => 'Adam (Musclore)',
                'cartoon' => 'Les Maître de l Univers',
                'creation_year' => 1985,
                'designer_id' => 2,
            ],
            [
                'name' => 'Tintin',
                'cartoon' => 'Les Aventures de Tintin',
                'creation_year' => 1929,
                'designer_id' => 3,
            ],
        ]);
    }
}
