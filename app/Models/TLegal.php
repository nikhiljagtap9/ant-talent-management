<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TLegal extends Model
{
    use HasFactory;

    protected $table = 't_legals';

    protected $fillable = [
        't_general_id',  // this is 'talent_id',
        'legal_first_name',
        'legal_middle_name',
        'legal_last_name',
        'company_name',
        'is_non_resident',
        'is_freelancer',
        'id_ss_number',
        'tax_number',
        'accounting_number',
        'insurance_number',
        'talent_tax_percent',
        'own_tax_responsible',
        'talent_commission_percent',
        'account_balance',
        'reserve_amount',
        'credit_status',
        'contract_name',
        'contract_signed_on',
        'contract_expires_on',
        'contract_is_back',
        'work_permit',
        'permit_country',
        'permit_issued_on',
        'permit_expires_on',
        'stop_payments',
        'stop_payments_notes',
    ]; 
}
