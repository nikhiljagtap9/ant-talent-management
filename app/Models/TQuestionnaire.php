<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TQuestionnaire extends Model
{
    use HasFactory;

    protected $fillable = ['t_general_id', 'question', 'status', 'notes'];

    public function general()
    {
        return $this->belongsTo(TGeneral::class, 't_general_id');
    }
}
