<?php

namespace Database\Seeders;

use App\Models\Parroquia;
use Illuminate\Database\Seeder;

class ParroquiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parroquia :: truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 225; $i++) {
            Parroquia::create([
                'nombre' => $faker->name,
                'canton_id' => $faker->numberBetween(1, 100)
            ]);
        }
    }
}
