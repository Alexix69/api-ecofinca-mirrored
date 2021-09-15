<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\FarmOwner;
use App\Models\RecyclerOwner;
use App\Models\Parroquia;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla users
        User::truncate();

        $faker = \Faker\Factory::create();

        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.

        $password = Hash::make('123123');

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'password' => $password,
                'address' => $faker->address,
                'image' => $faker->imageUrl(400, 300, null, false),
                'organization_type' => $faker->company,
                'description' => $faker->text,
                'parroquia_id' => $faker->numberBetween(1, 225),
                'role' => 'ROLE_FARM'
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'password' => $password,
                'address' => $faker->address,
                'image' => $faker->imageUrl(400, 300, null, false),
                'organization_type' => $faker->company,
                'description' => $faker->text,
                'parroquia_id' => $faker->numberBetween(1, 225),
                'role' => 'ROLE_COLLECTION_CENTER'
            ]);
        }
    }
}
