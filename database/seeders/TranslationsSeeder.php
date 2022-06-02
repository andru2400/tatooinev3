<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('translations')->insert([
            ["id" =>1,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"operation.succeeded","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>2,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"operation.failed","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>3,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"operation.not_allowed","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>4,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.first_name","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>5,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.last_name","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>6,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.email","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>7,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.password","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>8,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.password_repeat","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>9,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.activated","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>10,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.forbidden","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>11,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.language","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>12,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"forms.select_an_option","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>13,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.roles","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>14,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"forms.select_options","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>15,"namespace" =>"*","group" =>"admin","key" =>"admin-user.actions.create","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>16,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"btn.save","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>17,"namespace" =>"*","group" =>"admin","key" =>"admin-user.actions.edit","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>18,"namespace" =>"*","group" =>"admin","key" =>"admin-user.actions.index","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>19,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"placeholder.search","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>20,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"btn.search","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>21,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.id","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>22,"namespace" =>"*","group" =>"admin","key" =>"admin-user.columns.last_login_at","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>23,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"btn.edit","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>24,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"btn.delete","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>25,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"pagination.overview","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>26,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"index.no_items","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>27,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"index.try_changing_items","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>28,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"btn.new","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>29,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"profile_dropdown.account","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>30,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"profile_dropdown.profile","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>31,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"profile_dropdown.password","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>32,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"profile_dropdown.logout","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>33,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"sidebar.content","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>34,"namespace" =>"brackets/admin-ui","group" =>"admin","key" =>"sidebar.settings","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>35,"namespace" =>"*","group" =>"admin","key" =>"admin-user.actions.edit_password","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>36,"namespace" =>"*","group" =>"admin","key" =>"admin-user.actions.edit_profile","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>37,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"activation_form.title","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>38,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"activation_form.note","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>39,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"auth_global.email","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>40,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"activation_form.button","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>41,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"login.title","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>42,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"login.sign_in_text","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>43,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"auth_global.password","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>44,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"login.button","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>45,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"login.forgot_password","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>46,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"forgot_password.title","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>47,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"forgot_password.note","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>48,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"forgot_password.button","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>49,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"password_reset.title","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>50,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"password_reset.note","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>51,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"auth_global.password_confirm","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>52,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"password_reset.button","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>53,"namespace" =>"brackets/admin-auth","group" =>"activations","key" =>"email.line","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>54,"namespace" =>"brackets/admin-auth","group" =>"activations","key" =>"email.action","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>55,"namespace" =>"brackets/admin-auth","group" =>"activations","key" =>"email.notRequested","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>56,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"activations.activated","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>57,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"activations.invalid_request","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>58,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"activations.disabled","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>59,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"activations.sent","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>60,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"passwords.sent","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>61,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"passwords.reset","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>62,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"passwords.invalid_token","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>63,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"passwords.invalid_user","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>64,"namespace" =>"brackets/admin-auth","group" =>"admin","key" =>"passwords.invalid_password","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>65,"namespace" =>"brackets/admin-auth","group" =>"resets","key" =>"email.line","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>66,"namespace" =>"brackets/admin-auth","group" =>"resets","key" =>"email.action","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>67,"namespace" =>"brackets/admin-auth","group" =>"resets","key" =>"email.notRequested","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>68,"namespace" =>"*","group" =>"auth","key" =>"failed","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>69,"namespace" =>"*","group" =>"auth","key" =>"throttle","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>70,"namespace" =>"*","group" =>"*","key" =>"Manage access","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>71,"namespace" =>"*","group" =>"*","key" =>"Translations","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],
            ["id" =>72,"namespace" =>"*","group" =>"*","key" =>"Configuration","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"]
        ]);
    }
}
