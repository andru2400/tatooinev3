<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')->insert([
            ["id"=>1,"name"=>"full_name","field_type_id"=>1,"description"=>"Nombre Completo","created_at"=>"2022-05-30 15:54:05","updated_at"=>"2022-05-30 15:54:05"],
            ["id"=>2,"name"=>"phone","field_type_id"=>2,"description"=>"Numero de telefono","created_at"=>"2022-05-30 15:55:31","updated_at"=>"2022-05-30 15:55:31"],
            ["id"=>3,"name"=>"email","field_type_id"=>3,"description"=>"Correo Electronico","created_at"=>"2022-05-30 15:56:24","updated_at"=>"2022-05-30 15:56:24"],
            ["id"=>4,"name"=>"document_types","field_type_id"=>7,"description"=>"Tipos de documento","created_at"=>"2022-05-30 16:29:47","updated_at"=>"2022-05-30 16:29:47"]
        ]);
    }
}
