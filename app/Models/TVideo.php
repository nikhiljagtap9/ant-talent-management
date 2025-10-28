<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TVideo extends Model
{
    use HasFactory;

    protected $table = 't_videos';

    protected $fillable = [
        't_general_id',
        'title',
        'embed_code',
        'download_link',
        'description',
    ];

    public function general(){
        return $this->belongsTo(TGeneral::class, 't_general_id');
    }
}
