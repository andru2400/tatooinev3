<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign_field_rule extends Model
{
    use HasFactory;

    protected $table = "campaign_field_rule";

    protected $fillable = [
        'id',
        'campaign_field_id',
        'rule_id',
        'value'
    ];

    public function ejemplodevolucion()
    {
        return "HolaMundo";
    }


}
