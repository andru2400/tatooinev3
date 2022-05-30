<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'name',
        'value',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /* m:m */
    public function fields()
    {
        return $this->belongsToMany('App\Models\Field');
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/options/'.$this->getKey());
    }
}
