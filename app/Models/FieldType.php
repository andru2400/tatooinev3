<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldType extends Model
{
    protected $fillable = [
        'name',
        'description',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /* 1:m */
    public function fields()
    {
        return $this->hasMany(Field::class);
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/field-types/'.$this->getKey());
    }
}
