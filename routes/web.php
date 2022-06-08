<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('users')->name('users/')->group(static function() {
            Route::get('/',                                             'UsersController@index')->name('index');
            Route::get('/create',                                       'UsersController@create')->name('create');
            Route::post('/',                                            'UsersController@store')->name('store');
            Route::get('/{user}/edit',                                  'UsersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UsersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{user}',                                      'UsersController@update')->name('update');
            Route::delete('/{user}',                                    'UsersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('options')->name('options/')->group(static function() {
            Route::get('/',                                             'OptionsController@index')->name('index');
            Route::get('/create',                                       'OptionsController@create')->name('create');
            Route::post('/',                                            'OptionsController@store')->name('store');
            Route::get('/{option}/edit',                                'OptionsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'OptionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{option}',                                    'OptionsController@update')->name('update');
            Route::delete('/{option}',                                  'OptionsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('rules')->name('rules/')->group(static function() {
            Route::get('/',                                             'RulesController@index')->name('index');
            Route::get('/create',                                       'RulesController@create')->name('create');
            Route::post('/',                                            'RulesController@store')->name('store');
            Route::get('/{rule}/edit',                                  'RulesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RulesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{rule}',                                      'RulesController@update')->name('update');
            Route::delete('/{rule}',                                    'RulesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('fields')->name('fields/')->group(static function() {
            Route::get('/',                                             'FieldsController@index')->name('index');
            Route::get('/create',                                       'FieldsController@create')->name('create');
            Route::post('/',                                            'FieldsController@store')->name('store');
            Route::get('/{field}/edit',                                 'FieldsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'FieldsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{field}',                                     'FieldsController@update')->name('update');
            Route::delete('/{field}',                                   'FieldsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('field-types')->name('field-types/')->group(static function() {
            Route::get('/',                                             'FieldTypesController@index')->name('index');
            Route::get('/create',                                       'FieldTypesController@create')->name('create');
            Route::post('/',                                            'FieldTypesController@store')->name('store');
            Route::get('/{fieldType}/edit',                             'FieldTypesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'FieldTypesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{fieldType}',                                 'FieldTypesController@update')->name('update');
            Route::delete('/{fieldType}',                               'FieldTypesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('campaigns')->name('campaigns/')->group(static function() {
            Route::get('/',                                             'CampaignsController@index')->name('index');
            Route::get('/create',                                       'CampaignsController@create')->name('create');
            Route::post('/',                                            'CampaignsController@store')->name('store');
            Route::get('/{campaign}/edit',                              'CampaignsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CampaignsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{campaign}',                                  'CampaignsController@update')->name('update');
            Route::delete('/{campaign}',                                'CampaignsController@destroy')->name('destroy');

            Route::get('/{campaign}/fields',                            'CampaignsController@fields')->name('fields');
            Route::post('/{campaign}/fields/add',                       'CampaignsController@addFields')->name('fields-add');
            Route::delete('/{campaign}/fields/{field}',                 'CampaignsController@fieldDestroy')->name('fields-destroy');

            Route::get('/{campaign}/fields/{field}/rules',              'CampaignsController@rules')->name('fields');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('roles')->name('roles/')->group(static function() {
            Route::get('/',                                             'RolesController@index')->name('index');
            Route::get('/create',                                       'RolesController@create')->name('create');
            Route::post('/',                                            'RolesController@store')->name('store');
            Route::get('/{role}/edit',                                  'RolesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RolesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{role}',                                      'RolesController@update')->name('update');
            Route::delete('/{role}',                                    'RolesController@destroy')->name('destroy');

            Route::get('/{role}/permissions',                           'RolesController@permissions')->name('permissions');
            Route::post('/{role}/permissions/add',                      'RolesController@addPermissions')->name('permissions-add');
            Route::delete('/{role}/permissions/{permission}',           'RolesController@permissionDestroy')->name('permission-destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('permissions')->name('permissions/')->group(static function() {
            Route::get('/',                                             'PermissionsController@index')->name('index');
            Route::get('/create',                                       'PermissionsController@create')->name('create');
            Route::post('/',                                            'PermissionsController@store')->name('store');
            Route::get('/{permission}/edit',                            'PermissionsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PermissionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{permission}',                                'PermissionsController@update')->name('update');
            Route::delete('/{permission}',                              'PermissionsController@destroy')->name('destroy');
        });
    });
});
