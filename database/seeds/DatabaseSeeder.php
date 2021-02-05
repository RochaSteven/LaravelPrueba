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
        // $this->call(UserSeeder::class);
        \App\Models\Rol::factory(10)->create();
        \App\Models\Persona::factory(10)->create();
        \App\Models\Configuracion::factory(10)->create();
    }
}
