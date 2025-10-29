<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TAlbumImage extends Model
{
    use HasFactory;

    protected $fillable = ['t_general_id','album_id', 'image_id', 'order'];
}
