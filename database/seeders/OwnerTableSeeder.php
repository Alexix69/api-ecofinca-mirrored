<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Owner;
use Illuminate\Support\Facades\Hash;

class OwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Owner::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        $password = Hash::make('123123');
        for ($i = 0; $i < 50; $i++) {
            Owner::create([
                'owner_name' => $faker->name,
                'owner_last_name' => $faker->lastName,
                'owner_email' => $faker->email,
                'owner_password' => $password,
                'owner_cellphone' => $faker->phoneNumber,
                'owner_neighborhood' => $faker->city,
                'owner_address' => $faker->address,
                'owner_picture' => $faker->sentence,
                'owner_latitude' => $faker->latitude,
                'owner_longitude' => $faker->longitude
            ]);
        }
    }
}
