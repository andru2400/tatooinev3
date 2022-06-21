<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $fillable = [
        'name',
        'country_id',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /* m:1 */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /* 1:m */
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/departaments/'.$this->getKey());
    }
}
