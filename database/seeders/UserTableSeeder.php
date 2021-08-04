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

        // Obtenemos todas las parroquias de la bdd
        $parroquias = Parroquia::all();

        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.

        $password = Hash::make('123123');

        $admin = Admin::create(['credential_number' => '1723157887']);

        $admin->user()->create([
            'name' => 'Administrador',
            'lastname' => 'Principal',
            'email' => 'admin@prueba.com',
            'password' => $password,
            'cellphone' => $faker->phoneNumber,
            'address' => $faker->address,
            'image' => $faker->imageUrl(400, 300, null, false),
            'parroquia_id' => $faker->numberBetween(1, 20),
            'role' => 'ROLE_ADMIN'
        ]);

        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 10; $i++) {

            $farm_owner = FarmOwner::create([
                'farm_name' => $faker->company,
                'farm_description' => $faker->paragraph
            ]);

            $farm_owner->user()->create([
                'name' => $faker->name,
                'lastname' => $faker->lastname,
                'email' => $faker->email,
                'password' => $password,
                'cellphone' => $faker->phoneNumber,
                'address' => $faker->address,
                'image' => $faker->imageUrl(400, 300, null, false),
                'parroquia_id' => $faker->numberBetween(1, 20)
            ]);

            $recycler_owner = RecyclerOwner::create([
                'collection_center_name' => $faker->company,
                'collection_center_information' => $faker->word
            ]);

            $recycler_owner->user()->create([
                'name' => $faker->name,
                'lastname' => $faker->lastname,
                'email' => $faker->email,
                'password' => $password,
                'cellphone' => $faker->phoneNumber,
                'address' => $faker->address,
                'image' => $faker->imageUrl(400, 300, null, false),
                'parroquia_id' => $faker->numberBetween(1, 20)
            ]);
        }
    }
}
