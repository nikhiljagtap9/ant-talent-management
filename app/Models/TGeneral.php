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
        'minimum_tariff', 'minimum_hourly_rate', 'minimum_day_rate',
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

    public function legal()
    {
        return $this->hasOne(TLegal::class, 't_general_id');
    }

    public function contacts()
    {
        return $this->hasMany(TContact::class, 't_general_id');
    }

    public function agencies()
    {
        return $this->hasMany(TAgency::class, 't_general_id');
    }

    public function usage()
    {
        return $this->hasOne(TUsage::class,'t_general_id');
    }

    public function document()
    {
        return $this->hasOne(TUserDocument::class,'t_general_id');
    }

    public function stats()
    {
        return $this->hasOne(TStat::class,'t_general_id');
    }

    public function questionnaires()
    {
        return $this->hasMany(TQuestionnaire::class,'t_general_id');
    }

    public function skills()
    {
        return $this->hasMany(TSkill::class,'t_general_id');
    }

    public function fingerSize()
    {
        return $this->hasOne(TFingerSize::class,'t_general_id');
    }

    public function images()
    {
        return $this->hasMany(TImage::class, 't_general_id');
    }

    public function videos()
    {
        return $this->hasMany(TVideo::class, 't_general_id');
    }
}

