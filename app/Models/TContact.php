<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TContact extends Model
{
    use HasFactory;

    protected $fillable = [
       't_general_id','name','relationship','email','mobile','phone',
    ];
}
