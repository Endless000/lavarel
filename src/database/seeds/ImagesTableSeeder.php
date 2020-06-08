<?php

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Apartment;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = Apartment::all();

        foreach (range(1, 10, 1) as $i) {
            $image = factory(Image::class, 1)->make()
                ->each(function ($foo) use ($apartments, $i) {
                    $foo->apartment_id = $apartments->where('id', $i)->first()->id;
                })->toArray();

            Image::insert($image);
        }
    }
}
