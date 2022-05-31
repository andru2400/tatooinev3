<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignFieldRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_field_rule', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('campaign_field_id')->unsigned();
            $table->bigInteger('rule_id')->unsigned();
            $table->string('value')->nullable();

            $table->foreign('campaign_field_id')->references('id')->on('campaign_field');
            $table->foreign('rule_id')->references('id')->on('rules');

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
        Schema::dropIfExists('campaign_field_rule');
    }
}
