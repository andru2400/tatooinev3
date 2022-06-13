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
            ["id"=>1,"name"=>"Audi","value"=>"audi","created_at"=>"2022-05-30 15:40:47","updated_at"=>"2022-05-30 15:40:47"],
            ["id"=>2,"name"=>"Chevrolet","value"=>"chevrolet","created_at"=>"2022-05-30 15:41:05","updated_at"=>"2022-05-30 15:41:05"],
            ["id"=>3,"name"=>"Ford","value"=>"ford","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>4,"name"=>"Kia","value"=>"kia","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>5,"name"=>"Mazda","value"=>"mazda","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>6,"name"=>"Mercedes Benz","value"=>"mercedes_benz","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>7,"name"=>"Mitsubishi","value"=>"mitsubishi","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>8,"name"=>"Peugeot","value"=>"peugeot","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>9,"name"=>"Renault","value"=>"renault","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>10,"name"=>"Suzuki","value"=>"suzuki","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>11,"name"=>"Toyota","value"=>"toyota","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>12,"name"=>"Volkswagen","value"=>"volkswagen","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],

            ["id"=>13,"name"=>"Cédula de ciudadanía","value"=>"citizenship_card","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>14,"name"=>"Cédula de extranjería","value"=>"foreigner_id","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>15,"name"=>"Pasaporte","value"=>"passport","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>16,"name"=>"NIT","value"=>"nit","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],

            ["id"=>17,"name"=>"Queja","value"=>"complain","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>18,"name"=>"Reclamo","value"=>"claim","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>19,"name"=>"Pregunta","value"=>"ask","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>20,"name"=>"Otro","value"=>"other","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],

            ["id"=>21,"name"=>"Otro","value"=>"other","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
            ["id"=>22,"name"=>"Otro","value"=>"other","created_at"=>"2022-05-30 15:41:25","updated_at"=>"2022-05-30 15:41:25"],
        ]);
    }
}
