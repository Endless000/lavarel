<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [   'id' => 1,
                'name' => 'antalya'
            ],
            [
                'id' => 2,
                'name' => 'ankara'
            ],
            [
                'id' => 3,
                'name' => 'istanbul'
            ],
            [
                'id' => 4,
                'name' => 'marmaris'
            ],
            [
                'id' => 5,
                'name' => 'side'
            ]
        ]);
    }

}
