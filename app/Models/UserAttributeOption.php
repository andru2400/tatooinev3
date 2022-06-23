<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAttributeOption extends Model
{
    protected $fillable = [
        'value',
        'user_attribute_id',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /* m:1 */
    public function user_attribute()
    {
        return $this->belongsTo(UserAttribute::class, 'user_attribute_id');
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/user-attribute-options/'.$this->getKey());
    }
}
