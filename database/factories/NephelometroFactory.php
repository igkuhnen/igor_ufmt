<?php

use app\Nephelometro;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Nephelometro::class, function (Faker $faker) {
    return [
        'dataNephelometro' => now(),
        'typeNephelometro' => Str::random(5),
        'coefNephelometro' => Str::random(3),
        'airtempNephelometro' => 3,
        'celltempNephelometro' => 4,
        'rhNephelometro' => 5,
        'pressureNephelometro' => 8,
    ];
});
