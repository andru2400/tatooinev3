<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CampaignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->insert([
            [
             'id'               => '1',
             'name'             => 'Campaña test - 1',
             'status'           => 1,
             'created_at'       => '2022-05-30 15:58:34',
             'updated_at'       => '2022-05-30 15:58:34',
            ],
       ]);
    }
}
