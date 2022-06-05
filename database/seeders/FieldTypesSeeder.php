<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FieldTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('field_types')->insert([
            ["id"=>1,"name"=>"text","description"=>"Tipo Texto","created_at"=>"2022-05-30 15:45:52","updated_at"=>"2022-05-30 15:45:52"],
            ["id"=>2,"name"=>"number","description"=>"Tipo Numero","created_at"=>"2022-05-30 15:46:39","updated_at"=>"2022-05-30 15:46:39"],
            ["id"=>3,"name"=>"email","description"=>"Tipo Email","created_at"=>"2022-05-30 15:47:01","updated_at"=>"2022-05-30 15:47:01"],
            ["id"=>4,"name"=>"date","description"=>"Tipo Fecha","created_at"=>"2022-05-30 15:47:31","updated_at"=>"2022-05-30 15:47:31"],
            ["id"=>5,"name"=>"datetime-local","description"=>"Tipo Fecha Hora","created_at"=>"2022-05-30 15:47:53","updated_at"=>"2022-05-30 15:47:53"],
            ["id"=>6,"name"=>"time","description"=>"Tipo Hora","created_at"=>"2022-05-30 15:47:53","updated_at"=>"2022-05-30 15:47:53"],
            ["id"=>7,"name"=>"select","description"=>"Tipo Seleccion (opciones)","created_at"=>"2022-05-30 15:49:13","updated_at"=>"2022-05-30 15:51:28"],
            ["id"=>8,"name"=>"textarea","description"=>"Tipo Texto largo","created_at"=>"2022-05-30 15:50:37","updated_at"=>"2022-05-30 15:50:37"],
        ]);

    }
}
