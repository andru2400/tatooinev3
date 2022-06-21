<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'departament_id',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    /* m:1 */
    public function departament()
    {
        return $this->belongsTo(Departament::class,'departament_id');
    }

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/cities/'.$this->getKey());
    }
}
