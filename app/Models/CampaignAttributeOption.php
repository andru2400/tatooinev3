<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignAttributeOption extends Model
{
    protected $fillable = [
        'value',
        'campaign_attribute_id',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/campaign-attribute-options/'.$this->getKey());
    }
}
