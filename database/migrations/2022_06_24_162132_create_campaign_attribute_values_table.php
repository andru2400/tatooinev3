<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignAttributeValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_attribute_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('campaign_id')->unsigned();
            $table->bigInteger('campaign_attribute_id')->unsigned();
            $table->bigInteger('campaign_attribute_option_id')->unsigned()->nullable();

            $table->string('value')->nullable();

            $table->foreign('campaign_id')->references('id')->on('users');
            $table->foreign('campaign_attribute_id')->references('id')->on('campaign_attributes');
            $table->foreign('campaign_attribute_option_id')->references('id')->on('campaign_attribute_options');

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
        Schema::dropIfExists('campaign_attribute_values');
    }
}
