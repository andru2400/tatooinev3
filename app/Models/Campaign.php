<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'name',
        'status',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /* m:m */
    public function owner_locations()
    {
        return $this->belongsToMany('App\Models\OwnerLocation')->withPivot('status');
    }

    /* m:m */
    public function fields()
    {
        return $this->belongsToMany('App\Models\Field')->withPivot('id');
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/campaigns/'.$this->getKey());
    }
}
