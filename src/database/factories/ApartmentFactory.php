<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Apartment;
use App\Models\City;
use App\Models\Detail;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Carbon\Carbon;

$factory->define(Apartment::class, function (Faker $faker) {
    return [
        'city_id' => function () {
            return \factory(City::class)->make()->id;
        },
        'detail_id' => function () {
            return \factory(Detail::class)->make()->id;
        },

        'description' => $faker->text,
        'location' => $faker->text,
        'created_at' => Carbon::now(),
        'updated_at' => null
    ];
});
