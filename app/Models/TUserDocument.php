<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TUserDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        't_general_id',
        'passport_number', 'passport_issue_date', 'passport_expiry_date', 'passport_country', 'passport_file',
        'visa_number', 'visa_issue_date', 'visa_expiry_date', 'visa_country', 'visa_file',
        'contract_initial_date', 'contract_expiry_date', 'contract_file',
        'license_expiry_date', 'license_file',
        'photo_file', 'photo_document_file',
        'other_comment', 'other_file',
    ];

    public function general()
    {
        return $this->belongsTo(TGeneral::class, 't_general_id');
    }
}
