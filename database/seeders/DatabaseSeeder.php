<?php

namespace Database\Seeders;

use App\Models\Collection_Center_Plastic;
use App\Models\Provincia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\This;

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
        $this->call(ParroquiasTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DeliveryTableSeeder::class);
        $this->call(ProvinciasTableSeeder::class);
        $this->call(CantonesTableSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}
