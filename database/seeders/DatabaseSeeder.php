<?php

namespace Database\Seeders;

use App\Models\Collection_Center_Plastic;
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
        // \App\Models\User::factory(10)->create();
        $this->call(Collection_Centers_PlasticsTableSeeder::class);
    }
}
