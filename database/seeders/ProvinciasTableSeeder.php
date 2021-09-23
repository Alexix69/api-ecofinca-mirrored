<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Provincia :: truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 27; $i++) {
            Provincia::create([
                'nombre' => $faker->name,
            ]);
        }
    }
}
