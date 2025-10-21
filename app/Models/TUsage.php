<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TUsage extends Model
{
    use HasFactory;

    protected $fillable = [
        't_general_id',
        'event_type',
        'usage_type',
        'client',
        'product',
        'start_date',
        'end_date',
        'booker',
        'exclusivity',
        'board',
    ];
}
