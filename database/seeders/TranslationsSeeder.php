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
            ["id" =>72,"namespace" =>"*","group" =>"*","key" =>"Configuration","text" =>"[]","created_at" =>"2022-05-29 20:36:00","updated_at" =>"2022-05-29 20:36:00"],

            ["id"=>73	,	 "namespace" =>	"*"	,	"group" => "admin"	,	 "key"=>"campaign.columns.name"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>74	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"campaign.columns.status"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>75	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"campaign.columns.fields"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>76	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"campaign.actions.create"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>77	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"campaign.actions.edit"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>78	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"role.actions.index"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>79	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"permission.columns.id"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>80	,	 "namespace" =>	 "brackets/admin-ui"	,	"group" => "admin"	,	 "key"=>"listing.selected_items"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>81	,	 "namespace" =>	 "brackets/admin-ui"	,	"group" => "admin"	,	 "key"=>"listing.check_all_items"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>82	,	 "namespace" =>	 "brackets/admin-ui"	,	"group" => "admin"	,	 "key"=>"listing.uncheck_all_items"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>83	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"permission.actions.create"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>84	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"campaign.actions.index"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>85	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"campaign.columns.id"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>86	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field-type.columns.name"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>87	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field-type.columns.description"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>88	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field-type.actions.create"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>89	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field-type.actions.edit"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>90	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field-type.actions.index"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>91	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field-type.columns.id"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>92	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field.columns.name"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>93	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field.columns.field_type_id"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>94	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field.columns.description"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>95	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field.columns.options"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>96	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field.actions.create"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>97	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field.actions.edit"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>98	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field.actions.index"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>99	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field.columns.id"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>100	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"user.title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>101	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"option.title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>102	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"rule.title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>103	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field.title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>104	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"field-type.title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>105	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"campaign.title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>106	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"role.title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>107	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"permission.title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>108	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"option.columns.name"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>109	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"option.columns.value"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>110	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"option.columns.fields"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>111	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"option.actions.create"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>112	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"option.actions.edit"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>113	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"option.actions.index"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>114	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"option.columns.id"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>115	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"permission.columns.name"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>116	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"permission.columns.guard_name"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>117	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"permission.actions.edit"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>118	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"permission.actions.index"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>119	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"role.columns.name"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>120	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"role.columns.guard_name"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>121	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"role.actions.create"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>122	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"role.actions.edit"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>123	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"role.columns.id"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>124	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"rule.columns.name"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>125	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"rule.columns.validation_string"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>126	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"rule.actions.create"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>127	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"rule.actions.edit"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>128	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"rule.actions.index"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>129	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"rule.columns.id"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>130	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"user.columns.name"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>131	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"user.columns.email"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>132	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"user.columns.email_verified_at"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>133	,	 "namespace" =>	 "brackets/admin-ui"	,	"group" => "admin"	,	 "key"=>"forms.select_date_and_time"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>134	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"user.columns.password"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>135	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"user.columns.password_repeat"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>136	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"user.actions.create"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>137	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"user.actions.edit"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>138	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"user.actions.index"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>139	,	 "namespace" =>	 "*"	,	"group" => "admin"	,	 "key"=>"user.columns.id"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>140	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>141	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"index.all_groups"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>142	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"index.edit"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>143	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"index.default_text"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>144	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"index.translation"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>145	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"index.translation_for_language"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>146	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>147	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.notice"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>148	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.upload_file"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>149	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.choose_file"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>150	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.language_to_import"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>151	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"fields.select_language"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>152	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.do_not_override"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>153	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.conflict_notice_we_have_found"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>154	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.conflict_notice_translations_to_be_imported"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>155	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.conflict_notice_differ"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>156	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"fields.group"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>157	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"fields.default"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>158	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"fields.current_value"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>159	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"fields.imported_value"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>160	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.sucesfully_notice"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>161	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"import.sucesfully_notice_update"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>162	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"index.export"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>163	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"export.notice"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>164	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"export.language_to_export"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>165	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"btn.export"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>166	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"index.title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>167	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"btn.import"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>168	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"btn.re_scan"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>169	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"fields.created_at"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>170	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"index.no_items"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>171	,	 "namespace" =>	 "brackets/admin-translations"	,	"group" => "admin"	,	 "key"=>"index.try_changing_items"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>172	,	 "namespace" =>	 "brackets/admin-ui"	,	"group" => "admin"	,	 "key"=>"media_uploader.max_number_of_files"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>173	,	 "namespace" =>	 "brackets/admin-ui"	,	"group" => "admin"	,	 "key"=>"media_uploader.max_size_pre_file"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>174	,	 "namespace" =>	 "brackets/admin-ui"	,	"group" => "admin"	,	 "key"=>"media_uploader.private_title"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>175	,	 "namespace" =>	 "brackets/admin-ui"	,	"group" => "admin"	,	 "key"=>"page_title_suffix"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>176	,	 "namespace" =>	 "brackets/admin-ui"	,	"group" => "admin"	,	 "key"=>"footer.powered_by"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]	,
            ["id"=>177	,	 "namespace" =>	 "*"	,	"group" => "*"	,	 "key"=>"Close"	,	"text" => "[]"	,	"created_at" =>"2022-05-29 20:36:00"	,	"updated_at" =>"2022-05-29 20:36:00"]

        ]);
    }
}
