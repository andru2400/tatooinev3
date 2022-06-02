<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            ["id"=>1,"name"=>"Option1","value"=>"option_1","created_at"=>"2022-05-30 15:40:47","updated_at"=>"2022-05-30 15:40:47"],
            ["id"=>2,"name"=>"Option2","value"=>"option_2","created_at"=>"2022-05-30 15:41:05","updated_at"=>"2022-05-30 15:41:05"],
            ["id"=>3,"name"=>"Option3","value"=>"option_3","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"]
        ]);
    }
}
