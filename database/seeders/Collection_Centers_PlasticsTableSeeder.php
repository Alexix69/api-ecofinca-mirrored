<?php

namespace Database\Seeders;

use App\Models\Collection_Center_Plastic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Collection_Centers_PlasticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection_Center_Plastic::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('ecofinca');

        for ($i = 0; $i < 25; $i++) {
            Collection_Center_Plastic::create([
                'manager_name' => $faker->name,
                'manager_last_name' => $faker->lastName,
                'manager_email' => $faker->email,
                'manager_password' => $password,
                'manager_cellphone' => $faker->phoneNumber,
                'manager_neighborhood' => $faker->city,
                'manager_address' => $faker->address,
                'manager_picture' => $faker->url,
                'manager_latitude' => $faker->latitude,
                'manager_longitude' => $faker->longitude
            ]);
        }
    }
}
