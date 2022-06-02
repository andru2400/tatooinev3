<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CampaignFieldRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaign_field_rule')->insert([
            ["id"=>1,"campaign_field_id"=>1,"rule_id"=>1,"value"=>null],
            ["id"=>2,"campaign_field_id"=>1,"rule_id"=>2,"value"=>null]
        ]);
    }
}
