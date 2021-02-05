<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Configuracion;
use Faker\Generator as Faker;

$factory->define(Configuracion::class, function (Faker $faker) {
    return [
        //
        'idioma' => $this->faker->idioma,
        'pais' => $this->faker->pais,
        'estado' => $this->faker->estado,
    ];
});
