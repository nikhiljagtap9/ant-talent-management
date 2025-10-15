<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TSocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        't_general_id', 'media', 'url', 'number', 'date_updated'
    ];
}
