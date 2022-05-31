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
        // $this->call();

        $this->call(AdminUsersSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(ModelHasRolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(RoleHasPermissionsSeeder::class);
        $this->call(TranslationsSeeder::class);
        $this->call(CampaignsSeeder::class);
        $this->call(FieldTypesSeeder::class);
        $this->call(FieldsSeeder::class);
        $this->call(CampaignFieldSeeder::class);
        $this->call(RulesSeeder::class);
        $this->call(CampaignFieldRuleSeeder::class);
        $this->call(OptionsSeeder::class);
        $this->call(FieldOptionSeeder::class);

        // admin_users                      - AdminUsersSeeder
        // users                            - UsersSeeder
        // roles                            - RolesSeeder
        // model_has_roles                  - ModelHasRolesSeeder
        // permissions                      - PermissionsSeeder
        // role_has_permissions  *Relation  - RoleHasPermissionsSeeder
        // translations                     - TranslationsSeeder
        // campaigns                        - CampaignsSeeder
        // field_types                      - FieldTypesSeeder
        // fields     *Relation             - FieldsSeeder
        // campaign_field *Relation         - CampaignFieldSeeder
        // rules                            - RulesSeeder
        // campaign_field_rule *Relation    - CampaignFieldRuleSeeder
        // options                          - OptionsSeeder
        // field_option *Relation           - FieldOptionSeeder
    }
}
