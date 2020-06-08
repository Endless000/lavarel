<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            [
                'id' => 1,
                'type' => 'Studio',
                'm²' => 45,
                'rooms' => 2,
                'price' => 54000
            ],
            [
                'id' => 2,
                'type' => 'Loft',
                'm²' => 85,
                'rooms' => 3,
                'price' => 75000
            ],
            [
                'id' => 3,
                'type' => 'Penthouse',
                'm²' => 120,
                'rooms' => 4,
                'price' => 125000
            ],
            [
                'id' => 4,
                'type' => 'House',
                'm²' => 250,
                'rooms' => 6,
                'price' => 190000
            ],
            [
                'id' => 5,
                'type' => 'Village',
                'm²' => 330,
                'rooms' => 8,
                'price' => 300000
            ]
        ]);
    }
}
