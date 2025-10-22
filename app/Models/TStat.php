<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TStat extends Model
{
    use HasFactory;

    protected $fillable = [
        't_general_id',
        'last_measured_date',
        'height',
        'bust',
        'waist',
        'hips',
        'cup',
        'shoe',
        'dress_top',
        'bottom',
        'eye_color',
        'hair_color',
        'hair_length',
        'hair_type',
        'body_type',
        'ethnic',
        'head',
        'collar',
        'gloves',
        'wrist_size',
        'inseam',
        'outseam',
        'sleeve',
        'custom_shoe_size',
        'weight',
    ];

    public function general()
    {
        return $this->belongsTo(TGeneral::class, 't_general_id');
    }
}