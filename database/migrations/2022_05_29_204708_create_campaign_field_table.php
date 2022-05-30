<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_field', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('campaign_id')->unsigned();
            $table->bigInteger('field_id')->unsigned();

            $table->foreign('campaign_id')->references('id')->on('campaigns');
            $table->foreign('field_id')->references('id')->on('fields');
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
        Schema::dropIfExists('campaign_field');
    }
}
