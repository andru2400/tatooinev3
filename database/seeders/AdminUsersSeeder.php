<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            [
             'id'               => '1',
             'first_name'       => 'Administrator',
             'last_name'        => 'Administrator',
             'email'            => 'administrator@bellpi.com',
             'password'         => bcrypt('Admin@digital'),
             'remember_token'   => null,
             'activated'        => 1,
             'forbidden'        => 0,
             'language'         => 'en',
             'deleted_at'       => null,
             'created_at'       => '2022-05-29 20:35:35',
             'updated_at'       => '2022-05-30 14:29:52',
             'last_login_at'    => '2022-05-30 13:35:54'
            ],
       ]);
    }
}
