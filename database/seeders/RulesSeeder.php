<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rules')->insert([
            ["id"=>1,"name"=>"Requerido",               "validation_string"=>"required","created_at"=>"2022-05-30 16:04:50","updated_at"=>"2022-05-30 16:04:50"],
            ["id"=>2,"name"=>"Texto",                   "validation_string"=>"string","created_at"=>"2022-05-30 16:06:11","updated_at"=>"2022-05-30 16:06:11"],
            ["id"=>3,"name"=>"Email",                   "validation_string"=>"email","created_at"=>"2022-05-30 16:11:20","updated_at"=>"2022-05-30 16:11:20"],
            ["id"=>4,"name"=>"Fecha",                   "validation_string"=>"date","created_at"=>"2022-05-30 16:14:00","updated_at"=>"2022-05-30 16:14:00"],
            ["id"=>5,"name"=>"Numérico",                "validation_string"=>"numeric","created_at"=>"2022-05-30 16:14:00","updated_at"=>"2022-05-30 16:14:00"],
            ["id"=>6,"name"=>"Boleano(true, false)",    "validation_string"=>"numeric","created_at"=>"2022-05-30 16:14:00","updated_at"=>"2022-05-30 16:14:00"],
            ["id"=>7,"name"=>"Alfa",                    "validation_string"=>"alfa","created_at"=>"2022-05-30 16:14:00","updated_at"=>"2022-05-30 16:14:00"],
            ["id"=>8,"name"=>"Alfa Numérico",           "validation_string"=>"alfa_num","created_at"=>"2022-05-30 16:14:00","updated_at"=>"2022-05-30 16:14:00"],
            ["id"=>9,"name"=>"Mínimo de caracteres",    "validation_string"=>"min:","created_at"=>"2022-05-30 16:14:00","updated_at"=>"2022-05-30 16:14:00"],
            ["id"=>10,"name"=>"Máximo de caracteres",   "validation_string"=>"max:","created_at"=>"2022-05-30 16:14:00","updated_at"=>"2022-05-30 16:14:00"],
            ["id"=>11,"name"=>"Regex Expresion regular","validation_string"=>"regex:","created_at"=>"2022-05-30 16:14:00","updated_at"=>"2022-05-30 16:14:00"]
        ]);
    }
}
