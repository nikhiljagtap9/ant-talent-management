<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        't_general_id', 'address1', 'address2', 'city', 'state', 'zip', 'country'
    ];
}
