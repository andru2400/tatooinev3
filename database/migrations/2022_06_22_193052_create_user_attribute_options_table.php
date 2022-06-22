<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAttributeOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_attribute_options', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('value');
            $table->bigInteger('user_attribute_id')->unsigned();

            $table->foreign('user_attribute_id')->references('id')->on('user_attributes');

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
        Schema::dropIfExists('user_attribute_options');
    }
}
