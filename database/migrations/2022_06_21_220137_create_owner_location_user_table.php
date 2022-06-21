<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerLocationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_location_user', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('owner_location_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('owner_location_id')->references('id')->on('owner_locations');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('owner_location_user');
    }
}
