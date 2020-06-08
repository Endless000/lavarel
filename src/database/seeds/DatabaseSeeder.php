<?php

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
        $this->call(ApartmentsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);

    }
}
