<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $this->call(AdminUsersSeeder::class);         it is already filled by php artisan migrate by default
        $this->call(UsersSeeder::class);
        // $this->call(RolesSeeder::class);              it is already filled by php artisan migrate by default
        // $this->call(ModelHasRolesSeeder::class);      it is already filled by php artisan migrate by default
        // $this->call(PermissionsSeeder::class);        it is already filled by php artisan migrate by default
        // $this->call(RoleHasPermissionsSeeder::class); it is already filled by php artisan migrate by default
        $this->call(TranslationsSeeder::class);
        $this->call(CampaignsSeeder::class);
        $this->call(FieldTypesSeeder::class);
        $this->call(FieldsSeeder::class);
        $this->call(CampaignFieldSeeder::class);
        $this->call(RulesSeeder::class);
        $this->call(CampaignFieldRuleSeeder::class);
        $this->call(OptionsSeeder::class);
        $this->call(FieldOptionSeeder::class);

    }
}
