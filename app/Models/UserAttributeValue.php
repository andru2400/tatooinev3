<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAttributeValue extends Model
{
    use HasFactory;

    protected $table = "user_attribute_values";
    protected $fillable = ['id','user_id','user_attribute_id','user_attribute_option_id','value'];
}
