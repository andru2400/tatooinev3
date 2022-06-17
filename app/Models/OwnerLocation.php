<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OwnerLocation extends Model
{
    protected $fillable = [
        'name',
        'campaign_owner_id',
        'city_id',
        'status',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/owner-locations/'.$this->getKey());
    }
}
