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
            ["id"=>1,"name"=>"required","validation_string"=>"Debe ser requerido","created_at"=>"2022-05-30 16:04:50","updated_at"=>"2022-05-30 16:04:50"],
            ["id"=>2,"name"=>"integer","validation_string"=>"Debe ser numérico","created_at"=>"2022-05-30 16:06:11","updated_at"=>"2022-05-30 16:06:11"],
            ["id"=>3,"name"=>"email","validation_string"=>"Debe ser correo electrónico","created_at"=>"2022-05-30 16:11:20","updated_at"=>"2022-05-30 16:11:20"],
            ["id"=>4,"name"=>"max","validation_string"=>"Debe tener máximo de caracteres","created_at"=>"2022-05-30 16:14:00","updated_at"=>"2022-05-30 16:14:00"]
        ]);
    }
}
