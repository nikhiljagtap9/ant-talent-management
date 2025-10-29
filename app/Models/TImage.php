<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TImage extends Model
{
    use HasFactory;

    protected $table = 't_images';
    
    protected $fillable = ['t_general_id', 'path', 'rotation'];

    public function albums()
    {
        return $this->belongsToMany(TAlbum::class, 't_album_images', 'image_id', 'album_id');
    }

    public function general()
    {
        return $this->belongsTo(TGeneral::class, 't_general_id');
    }
}
