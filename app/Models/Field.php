<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'name',
        'field_type_id',
        'description',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* m:1 */
    public function fieldtype()
    {
        return $this->belongsTo(FieldType::class, 'field_type_id');
    }

    /* m:m */
    public function options()
    {
        return $this->belongsToMany('App\Models\Option');
    }

    /* m:m */
    public function campaigns()
    {
        return $this->belongsToMany('App\Models\Campaign');
    }

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/fields/'.$this->getKey());
    }
}
