<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionCenterPlasticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection__center__plastics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('manager_name');
            $table->string('manager_last_name');
            $table->string('manager_email');
            $table->string('manager_password');
            $table->string('manager_cellphone');
            $table->string('manager_neighborhood');
            $table->string('manager_address');
            $table->string('manager_picture');
            $table->float('manager_latitude');
            $table->float('manager_longitude');
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
        Schema::dropIfExists('collection__center__plastics');
    }
}
