<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
             'id'               => '1',
             'name'             => 'Andres',
             'email'            => 'andres@bellpi.com',
             'email_verified_at'=> null,
             'password'         => bcrypt('Admin@digital'),
             'remember_token'   => null,
             'created_at'       => '2022-05-30 15:59:37',
             'updated_at'       => '2022-05-30 15:59:37',
            ],
       ]);
    }
}
