<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TAgency extends Model
{
    use HasFactory;

    protected $fillable = [
        't_general_id',
        'agency_name',
        // 'country',
        // 'city',
        // 'phone',
        'mother_agency_percentage',
        'assigned_on',
        'mother_agency',
        'other_mother_agency',
        'placement',
        'contract_received',
        'start_date',
        'end_date',
    ];

    public function general()
    {
        return $this->belongsTo(TGeneral::class, 't_general_id');
    }
}

