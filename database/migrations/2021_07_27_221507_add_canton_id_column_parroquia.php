<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCantonIdColumnParroquia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parroquias', function (Blueprint $table) {
            $table->unsignedBigInteger('canton_id');
            $table->foreign('canton_id')->references('id')->on('cantons')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parroquias', function (Blueprint $table) {
            $table->dropForeign(['canton_id']);
        });
    }
}
