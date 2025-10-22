<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TSkill extends Model
{
    use HasFactory;

    protected $fillable = ['t_general_id', 'skill', 'level', 'notes'];

    public function general()
    {
        return $this->belongsTo(TGeneral::class, 't_general_id');
    }
}
