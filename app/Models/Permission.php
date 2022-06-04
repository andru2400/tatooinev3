<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name',
        'guard_name',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /* m:m */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'role_has_permissions');
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/permissions/'.$this->getKey());
    }
}
