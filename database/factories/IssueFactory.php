<?php

use Faker\Generator as Faker;

$factory->define(App\Issue::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'title' => $faker->sentence($nbWords = 8, $variableNbWords = true),
        'issue' => $faker->paragraph($nbSentences = 5),
    ];
});
