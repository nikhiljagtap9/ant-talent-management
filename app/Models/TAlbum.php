<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TAlbum extends Model
{
    use HasFactory;

    protected $fillable = ['t_general_id', 'name'];

    public function general()
    {
        return $this->belongsTo(TGeneral::class, 't_general_id');
    }

    public function images()
    {
        return $this->belongsToMany(TImage::class, 't_album_images', 'album_id', 'image_id');
    }
}
