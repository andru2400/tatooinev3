<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
             'id'               => '1',
             'name'             => 'Administrador',
             'guard_name'       => 'admin',
             'created_at'       => '2022-05-29 20:35:34',
             'updated_at'       => '2022-05-29 20:35:34',
            ],
       ]);



    }
}
