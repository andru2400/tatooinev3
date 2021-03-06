<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAttribute extends Model
{
    protected $fillable = [
        'name',
        'description',
        'islist',
        'unique',
        'required',
        'status',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /* 1:m */
    public function user_attribute_options()
    {
        return $this->hasMany(UserAttributeOption::class);
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/user-attributes/'.$this->getKey());
    }
}
