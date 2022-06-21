<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /* 1:m */
    public function departaments()
    {
        return $this->hasMany(Departament::class);
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/countries/'.$this->getKey());
    }
}
