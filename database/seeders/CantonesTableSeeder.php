<?php

namespace Database\Seeders;

use App\Models\Canton;
use Illuminate\Database\Seeder;

class CantonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Canton :: truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 57; $i++) {
            Canton::create([
                'nombre' => $faker->name,
                'provincia_id' => $faker->numberBetween(1, 27)
            ]);
        }
    }
}
