<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_option', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('field_id')->unsigned();
            $table->bigInteger('option_id')->unsigned();

            $table->foreign('field_id')->references('id')->on('fields');
            $table->foreign('option_id')->references('id')->on('options');

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
        Schema::dropIfExists('field_option');
    }
}
