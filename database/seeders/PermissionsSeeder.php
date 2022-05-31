<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_has_roles')->insert([
            ["id" =>1,"name" =>"admin","guard_name" =>"admin","created_at" =>"2022-05-29 20:35:34","updated_at" =>"2022-05-29 20:35:34"],
            ["id" =>2,"name" =>"admin.translation.index","guard_name" =>"admin","created_at" =>"2022-05-29 20:35:34","updated_at" =>"2022-05-29 20:35:34"],
            ["id" =>3,"name" =>"admin.translation.edit","guard_name" =>"admin","created_at" =>"2022-05-29 20:35:34","updated_at" =>"2022-05-29 20:35:34"],
            ["id" =>4,"name" =>"admin.translation.rescan","guard_name" =>"admin","created_at" =>"2022-05-29 20:35:34","updated_at" =>"2022-05-29 20:35:34"],
            ["id" =>5,"name" =>"admin.admin-user.index","guard_name" =>"admin","created_at" =>"2022-05-29 20:35:34","updated_at" =>"2022-05-29 20:35:34"],
            ["id" =>6,"name" =>"admin.admin-user.create","guard_name" =>"admin","created_at" =>"2022-05-29 20:35:34","updated_at" =>"2022-05-29 20:35:34"],
            ["id" =>7,"name" =>"admin.admin-user.edit","guard_name" =>"admin","created_at" =>"2022-05-29 20:35:34","updated_at" =>"2022-05-29 20:35:34"],
            ["id" =>8,"name" =>"admin.admin-user.delete","guard_name" =>"admin","created_at" =>"2022-05-29 20:35:34","updated_at" =>"2022-05-29 20:35:34"],
            ["id" =>9,"name" =>"admin.upload","guard_name" =>"admin","created_at" =>"2022-05-29 20:35:34","updated_at" =>"2022-05-29 20:35:34"],
            ["id" =>10,"name" =>"admin.admin-user.impersonal-login","guard_name" =>"admin","created_at" =>"2022-05-29 20:35:34","updated_at" =>"2022-05-29 20:35:34"],
            ["id" =>11,"name" =>"admin.user","guard_name" =>"admin","created_at" =>"2022-05-29 20:46:05","updated_at" =>"2022-05-29 20:46:05"],
            ["id" =>12,"name" =>"admin.user.index","guard_name" =>"admin","created_at" =>"2022-05-29 20:46:05","updated_at" =>"2022-05-29 20:46:05"],
            ["id" =>13,"name" =>"admin.user.create","guard_name" =>"admin","created_at" =>"2022-05-29 20:46:05","updated_at" =>"2022-05-29 20:46:05"],
            ["id" =>14,"name" =>"admin.user.show","guard_name" =>"admin","created_at" =>"2022-05-29 20:46:05","updated_at" =>"2022-05-29 20:46:05"],
            ["id" =>15,"name" =>"admin.user.edit","guard_name" =>"admin","created_at" =>"2022-05-29 20:46:05","updated_at" =>"2022-05-29 20:46:05"],
            ["id" =>16,"name" =>"admin.user.delete","guard_name" =>"admin","created_at" =>"2022-05-29 20:46:05","updated_at" =>"2022-05-29 20:46:05"],
            ["id" =>17,"name" =>"admin.user.bulk-delete","guard_name" =>"admin","created_at" =>"2022-05-29 20:46:05","updated_at" =>"2022-05-29 20:46:05"],
            ["id" =>18,"name" =>"admin.option","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:36","updated_at" =>"2022-05-30 13:36:36"],
            ["id" =>19,"name" =>"admin.option.index","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:36","updated_at" =>"2022-05-30 13:36:36"],
            ["id" =>20,"name" =>"admin.option.create","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:36","updated_at" =>"2022-05-30 13:36:36"],
            ["id" =>21,"name" =>"admin.option.show","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:36","updated_at" =>"2022-05-30 13:36:36"],
            ["id" =>22,"name" =>"admin.option.edit","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:36","updated_at" =>"2022-05-30 13:36:36"],
            ["id" =>23,"name" =>"admin.option.delete","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:36","updated_at" =>"2022-05-30 13:36:36"],
            ["id" =>24,"name" =>"admin.option.bulk-delete","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:36","updated_at" =>"2022-05-30 13:36:36"],
            ["id" =>25,"name" =>"admin.rule","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:59","updated_at" =>"2022-05-30 13:36:59"],
            ["id" =>26,"name" =>"admin.rule.index","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:59","updated_at" =>"2022-05-30 13:36:59"],
            ["id" =>27,"name" =>"admin.rule.create","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:59","updated_at" =>"2022-05-30 13:36:59"],
            ["id" =>28,"name" =>"admin.rule.show","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:59","updated_at" =>"2022-05-30 13:36:59"],
            ["id" =>29,"name" =>"admin.rule.edit","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:59","updated_at" =>"2022-05-30 13:36:59"],
            ["id" =>30,"name" =>"admin.rule.delete","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:59","updated_at" =>"2022-05-30 13:36:59"],
            ["id" =>31,"name" =>"admin.rule.bulk-delete","guard_name" =>"admin","created_at" =>"2022-05-30 13:36:59","updated_at" =>"2022-05-30 13:36:59"],
            ["id" =>32,"name" =>"admin.field","guard_name" =>"admin","created_at" =>"2022-05-30 13:37:39","updated_at" =>"2022-05-30 13:37:39"],
            ["id" =>33,"name" =>"admin.field.index","guard_name" =>"admin","created_at" =>"2022-05-30 13:37:39","updated_at" =>"2022-05-30 13:37:39"],
            ["id" =>34,"name" =>"admin.field.create","guard_name" =>"admin","created_at" =>"2022-05-30 13:37:39","updated_at" =>"2022-05-30 13:37:39"],
            ["id" =>35,"name" =>"admin.field.show","guard_name" =>"admin","created_at" =>"2022-05-30 13:37:39","updated_at" =>"2022-05-30 13:37:39"],
            ["id" =>36,"name" =>"admin.field.edit","guard_name" =>"admin","created_at" =>"2022-05-30 13:37:39","updated_at" =>"2022-05-30 13:37:39"],
            ["id" =>37,"name" =>"admin.field.delete","guard_name" =>"admin","created_at" =>"2022-05-30 13:37:39","updated_at" =>"2022-05-30 13:37:39"],
            ["id" =>38,"name" =>"admin.field.bulk-delete","guard_name" =>"admin","created_at" =>"2022-05-30 13:37:39","updated_at" =>"2022-05-30 13:37:39"],
            ["id" =>39,"name" =>"admin.field-type","guard_name" =>"admin","created_at" =>"2022-05-30 13:38:20","updated_at" =>"2022-05-30 13:38:20"],
            ["id" =>40,"name" =>"admin.field-type.index","guard_name" =>"admin","created_at" =>"2022-05-30 13:38:20","updated_at" =>"2022-05-30 13:38:20"],
            ["id" =>41,"name" =>"admin.field-type.create","guard_name" =>"admin","created_at" =>"2022-05-30 13:38:20","updated_at" =>"2022-05-30 13:38:20"],
            ["id" =>42,"name" =>"admin.field-type.show","guard_name" =>"admin","created_at" =>"2022-05-30 13:38:20","updated_at" =>"2022-05-30 13:38:20"],
            ["id" =>43,"name" =>"admin.field-type.edit","guard_name" =>"admin","created_at" =>"2022-05-30 13:38:20","updated_at" =>"2022-05-30 13:38:20"],
            ["id" =>44,"name" =>"admin.field-type.delete","guard_name" =>"admin","created_at" =>"2022-05-30 13:38:20","updated_at" =>"2022-05-30 13:38:20"],
            ["id" =>45,"name" =>"admin.field-type.bulk-delete","guard_name" =>"admin","created_at" =>"2022-05-30 13:38:20","updated_at" =>"2022-05-30 13:38:20"],
            ["id" =>46,"name" =>"admin.campaign","guard_name" =>"admin","created_at" =>"2022-05-30 13:39:16","updated_at" =>"2022-05-30 13:39:16"],
            ["id" =>47,"name" =>"admin.campaign.index","guard_name" =>"admin","created_at" =>"2022-05-30 13:39:16","updated_at" =>"2022-05-30 13:39:16"],
            ["id" =>48,"name" =>"admin.campaign.create","guard_name" =>"admin","created_at" =>"2022-05-30 13:39:16","updated_at" =>"2022-05-30 13:39:16"],
            ["id" =>49,"name" =>"admin.campaign.show","guard_name" =>"admin","created_at" =>"2022-05-30 13:39:16","updated_at" =>"2022-05-30 13:39:16"],
            ["id" =>50,"name" =>"admin.campaign.edit","guard_name" =>"admin","created_at" =>"2022-05-30 13:39:16","updated_at" =>"2022-05-30 13:39:16"],
            ["id" =>51,"name" =>"admin.campaign.delete","guard_name" =>"admin","created_at" =>"2022-05-30 13:39:16","updated_at" =>"2022-05-30 13:39:16"],
            ["id" =>52,"name" =>"admin.campaign.bulk-delete","guard_name" =>"admin","created_at" =>"2022-05-30 13:39:16","updated_at" =>"2022-05-30 13:39:16"]
        ]);
    }
}
