<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = [
        'name',
        'validation_string',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /* m:m */
    public function campaign_fields()
    {
        return $this->belongsToMany('App\Models\Campaign_field');
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/rules/'.$this->getKey());
    }
}
