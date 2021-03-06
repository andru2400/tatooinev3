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

            Route::get('/{campaign}/fields/{field}/rules',              'CampaignsController@rules')->name('campaignfield-rule');
            Route::post('/{campaign}/fields/{field}/rules/add',         'CampaignsController@addRules')->name('campaignfield-rule-add');
            Route::post('/fields/rules/addValueRule',          'CampaignsController@addValueRule')->name('campaignfield-value-rule-add');

            Route::delete('/{campaign}/fields/{field}/rules/{rule}',    'CampaignsController@ruleDestroy')->name('rule-destroy');
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


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('campaign-owners')->name('campaign-owners/')->group(static function() {
            Route::get('/',                                             'CampaignOwnersController@index')->name('index');
            Route::get('/create',                                       'CampaignOwnersController@create')->name('create');
            Route::post('/',                                            'CampaignOwnersController@store')->name('store');
            Route::get('/{campaignOwner}/edit',                         'CampaignOwnersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CampaignOwnersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{campaignOwner}',                             'CampaignOwnersController@update')->name('update');
            Route::delete('/{campaignOwner}',                           'CampaignOwnersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('countries')->name('countries/')->group(static function() {
            Route::get('/',                                             'CountriesController@index')->name('index');
            Route::get('/create',                                       'CountriesController@create')->name('create');
            Route::post('/',                                            'CountriesController@store')->name('store');
            Route::get('/{country}/edit',                               'CountriesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CountriesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{country}',                                   'CountriesController@update')->name('update');
            Route::delete('/{country}',                                 'CountriesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('departaments')->name('departaments/')->group(static function() {
            Route::get('/',                                             'DepartamentsController@index')->name('index');
            Route::get('/create',                                       'DepartamentsController@create')->name('create');
            Route::post('/',                                            'DepartamentsController@store')->name('store');
            Route::get('/{departament}/edit',                           'DepartamentsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DepartamentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{departament}',                               'DepartamentsController@update')->name('update');
            Route::delete('/{departament}',                             'DepartamentsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('cities')->name('cities/')->group(static function() {
            Route::get('/',                                             'CitiesController@index')->name('index');
            Route::get('/create',                                       'CitiesController@create')->name('create');
            Route::post('/',                                            'CitiesController@store')->name('store');
            Route::get('/{city}/edit',                                  'CitiesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CitiesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{city}',                                      'CitiesController@update')->name('update');
            Route::delete('/{city}',                                    'CitiesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('owner-locations')->name('owner-locations/')->group(static function() {
            Route::get('/',                                             'OwnerLocationsController@index')->name('index');
            Route::get('/create',                                       'OwnerLocationsController@create')->name('create');
            Route::post('/',                                            'OwnerLocationsController@store')->name('store');
            Route::get('/{ownerLocation}/edit',                         'OwnerLocationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'OwnerLocationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{ownerLocation}',                             'OwnerLocationsController@update')->name('update');
            Route::delete('/{ownerLocation}',                           'OwnerLocationsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('user-attributes')->name('user-attributes/')->group(static function() {
            Route::get('/',                                             'UserAttributesController@index')->name('index');
            Route::get('/create',                                       'UserAttributesController@create')->name('create');
            Route::post('/',                                            'UserAttributesController@store')->name('store');
            Route::get('/{userAttribute}/edit',                         'UserAttributesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UserAttributesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{userAttribute}',                             'UserAttributesController@update')->name('update');
            Route::delete('/{userAttribute}',                           'UserAttributesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('user-attribute-options')->name('user-attribute-options/')->group(static function() {
            Route::get('/',                                             'UserAttributeOptionsController@index')->name('index');
            Route::get('/create',                                       'UserAttributeOptionsController@create')->name('create');
            Route::post('/',                                            'UserAttributeOptionsController@store')->name('store');
            Route::get('/{userAttributeOption}/edit',                   'UserAttributeOptionsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UserAttributeOptionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{userAttributeOption}',                       'UserAttributeOptionsController@update')->name('update');
            Route::delete('/{userAttributeOption}',                     'UserAttributeOptionsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('campaign-attributes')->name('campaign-attributes/')->group(static function() {
            Route::get('/',                                             'CampaignAttributesController@index')->name('index');
            Route::get('/create',                                       'CampaignAttributesController@create')->name('create');
            Route::post('/',                                            'CampaignAttributesController@store')->name('store');
            Route::get('/{campaignAttribute}/edit',                     'CampaignAttributesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CampaignAttributesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{campaignAttribute}',                         'CampaignAttributesController@update')->name('update');
            Route::delete('/{campaignAttribute}',                       'CampaignAttributesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('campaign-attribute-options')->name('campaign-attribute-options/')->group(static function() {
            Route::get('/',                                             'CampaignAttributeOptionsController@index')->name('index');
            Route::get('/create',                                       'CampaignAttributeOptionsController@create')->name('create');
            Route::post('/',                                            'CampaignAttributeOptionsController@store')->name('store');
            Route::get('/{campaignAttributeOption}/edit',               'CampaignAttributeOptionsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CampaignAttributeOptionsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{campaignAttributeOption}',                   'CampaignAttributeOptionsController@update')->name('update');
            Route::delete('/{campaignAttributeOption}',                 'CampaignAttributeOptionsController@destroy')->name('destroy');
        });
    });
});