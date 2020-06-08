<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Image;
use App\Models\Apartment;
use Faker\Generator as Faker;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'image' => '/storage/images/automobiles/' . Str::random(10) . '.jpg',
        'apartment_id' => function () {
            return \factory(Apartment::class)->make()->id;
        },
        'created_at' => Carbon::now()
    ];
});
