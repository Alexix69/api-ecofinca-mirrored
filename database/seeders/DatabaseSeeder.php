<?php

namespace Database\Seeders;

use App\Models\Collection_Center_Plastic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        $this->call(OwnerTableSeeder::class);
        $this->call(Collection_Centers_PlasticsTableSeeder::class);
        Schema::enableForeignKeyConstraints();

        // \App\Models\User::factory(10)->create();
        

    }
}
