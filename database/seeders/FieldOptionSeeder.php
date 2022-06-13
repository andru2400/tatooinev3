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
            ["id"=>1, "field_id"=>12, "option_id"=>1],
            ["id"=>2, "field_id"=>12, "option_id"=>2],
            ["id"=>3, "field_id"=>12, "option_id"=>3],
            ["id"=>4, "field_id"=>12, "option_id"=>4],
            ["id"=>5, "field_id"=>12, "option_id"=>5],
            ["id"=>6, "field_id"=>12, "option_id"=>6],
            ["id"=>7, "field_id"=>12, "option_id"=>7],
            ["id"=>8, "field_id"=>12, "option_id"=>8],
            ["id"=>9, "field_id"=>12, "option_id"=>9],
            ["id"=>10, "field_id"=>12, "option_id"=>10],
            ["id"=>11, "field_id"=>12, "option_id"=>11],
            ["id"=>12, "field_id"=>12, "option_id"=>12],

            ["id"=>13, "field_id"=>15, "option_id"=>13],
            ["id"=>14, "field_id"=>15, "option_id"=>14],
            ["id"=>15, "field_id"=>15, "option_id"=>15],
            ["id"=>16, "field_id"=>15, "option_id"=>16],

            ["id"=>17, "field_id"=>26, "option_id"=>17],
            ["id"=>18, "field_id"=>26, "option_id"=>18],
            ["id"=>19, "field_id"=>26, "option_id"=>19],
            ["id"=>20, "field_id"=>26, "option_id"=>20],

            ["id"=>21, "field_id"=>28, "option_id"=>21],
            ["id"=>22, "field_id"=>28, "option_id"=>22],

        ]);
    }
}
