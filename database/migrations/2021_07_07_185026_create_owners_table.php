<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('owner_last_name');
            $table->string('owner_email');
            $table->string('owner_password');
            $table->string('owner_cellphone');
            $table->string('owner_neighborhood');
            $table->string('owner_address');
            $table->string('owner_picture');
            $table->string('owner_latitude');
            $table->string('owner_longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
