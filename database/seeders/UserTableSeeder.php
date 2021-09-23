<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        // Vaciar la tabla
        User::truncate();

        $faker = \Faker\Factory::create();

        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.

        $password = Hash::make('123123');

        User::create([
            'name' => 'Administrador',
            'lastname' => 'Principal',
            'email' => 'admin@prueba.com',
            'password' => $password,
            'cellphone' => $faker->phoneNumber,
            'neighborhood' => $faker->country,
            'address' => $faker->address,
            'image' => $faker->image,
            'latitude' => $faker->latitude,
            'longitude' => $faker->longitude
        ]);

        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastname,
                'email' => $faker->email,
                'password' => $password,
                'cellphone' => $faker->phoneNumber,
                'neighborhood' => $faker->country,
                'address' => $faker->address,
                'image' => $faker->image,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude
            ]);
        }
    }
}
