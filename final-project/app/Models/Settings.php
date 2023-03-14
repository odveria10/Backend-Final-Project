<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'show_my_gender', 
        'show_my_bio',
        'allow_notifications',
        'location_preference',
        'allow_profile_visibility',
        'minimum_age_preference',
        'maximum_age_preference',
        'allow_account_deletion',
    ];
}
