<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignAttribute extends Model
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
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/campaign-attributes/'.$this->getKey());
    }
}
