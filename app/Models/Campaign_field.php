<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign_field extends Model
{
    use HasFactory;

    protected $table = "campaign_field";

    protected $fillable = [
        'id',
        'campaign_id',
        'field_id',
    ];

    /* m:m */
    public function rules()
    {
        return $this->belongsToMany('App\Models\Rule');
    }

}
