<?php

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DeliveryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Delivery::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('ecofinca');

        for ($i = 0; $i < 25; $i++) {
            Delivery::create([
                'description' => $faker->sentence,
                'quantity' => $faker->numberBetween(1,30),
                'picture' => $faker->url,
                'latitude'  => $faker->latitude,
                'longitude' => $faker->longitude
            ]);
        }
    }
}
