<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Color;
use Faker\Generator as Faker;

$factory->define(Color::class, function (Faker $faker) {
    return [

        'namecol' => $faker -> unique() -> safeColorName,
        'imgcol' => 'https://picsum.photos/200',
    ];
});
