<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TFingerSize extends Model
{
    use HasFactory;

    protected $fillable = [
        't_general_id',
        'left_thumb', 'right_thumb',
        'left_index', 'right_index',
        'left_middle', 'right_middle',
        'left_ring', 'right_ring',
        'left_little', 'right_little',
    ];

    public function general()
    {
        return $this->belongsTo(TGeneral::class, 't_general_id');
    }
}
