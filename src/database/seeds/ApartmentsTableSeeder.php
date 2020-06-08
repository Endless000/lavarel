<?php

use Illuminate\Database\Seeder;
use App\Models\Apartment;
use App\Models\City;
use App\Models\Detail;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = Detail::all();
        $cities = City::all();

        foreach (range(1, 10, 1) as $i) {
            $apartment = factory(Apartment::class, 1)->make()
                ->each(function ($foo) use ($details, $cities, $i) {
                    $foo->detail_id = $details->where('id', $i)->first()->id;
                    $foo->city_id = $cities->random()->id;
                })->toArray();

            Apartment::insert($apartment);
        }

    }
}

