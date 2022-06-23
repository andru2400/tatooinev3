<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAttributeValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_attribute_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('user_attribute_id')->unsigned();
            $table->bigInteger('user_attribute_option_id')->unsigned()->nullable();

            $table->string('value')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_attribute_id')->references('id')->on('user_attributes');
            $table->foreign('user_attribute_option_id')->references('id')->on('user_attribute_options');

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
        Schema::dropIfExists('user_attribute_values');
    }
}
