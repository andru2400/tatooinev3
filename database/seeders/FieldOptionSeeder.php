<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FieldOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('field_option')->insert([
            ["id"=>1, "field_id"=>4, "option_id"=>1],
            ["id"=>2, "field_id"=>4, "option_id"=>2]
        ]);
    }
}
