<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
      
            'namePersona' => $this->faker->namePersona,
            'nombreCompleto' => $this->faker->sentence(),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'telefono' => $this->faker->telefono,
            'edad' => $this->faker->edad,
            'fechaNacimiento' => $this->faker->fechaNacimiento,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
    ];
});
