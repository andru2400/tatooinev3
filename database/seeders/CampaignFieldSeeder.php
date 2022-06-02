<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CampaignFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaign_field')->insert([
            ["id"=>1,"campaign_id"=>1,"field_id"=>1],
            ["id"=>2,"campaign_id"=>1,"field_id"=>2],
            ["id"=>3,"campaign_id"=>1,"field_id"=>3]
        ]);
    }
}
