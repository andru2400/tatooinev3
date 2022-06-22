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

    /* m:m */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /* m:1 */
    public function campaign_owner()
    {
        return $this->belongsTo(CampaignOwner::class, 'campaign_owner_id');
    }

    /* m:1 */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/owner-locations/'.$this->getKey());
    }
}
