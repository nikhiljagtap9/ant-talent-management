<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TGeneral extends Model
{
    use HasFactory;

    protected $table = 't_general';

    protected $fillable = [
        'first_name', 'last_name', 'location', 'gender',
        'date_joined_agency', 'dob', 'birth_place', 'nationality',
        'mobile', 'phone', 'website', 'email', 'state', 'zip', 'country',
        'talent_id', 'minimum_tariff', 'minimum_hourly_rate', 'minimum_day_rate',
        'kids', 'allow_sms', 'email_icalendar', 'category'
    ];

    public function addresses()
    {
        return $this->hasMany(TAddress::class, 't_general_id');
    }

    public function socialMedia()
    {
        return $this->hasMany(TSocialMedia::class, 't_general_id');
    }
}

