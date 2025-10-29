<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TAlbum;
use App\Models\TAlbumImage;
use App\Models\TImage;

class AlbumController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            't_general_id' => 'required|integer|exists:t_general,id',
            'name' => 'required',
        ]);

        $album = TAlbum::create([
            't_general_id' => $request->t_general_id,
            'name' => $request->name,
        ]);

        return response()->json(['status' => true, 'album' => $album]);
    }

    public function getImages(Request $request)
    {
        $request->validate(['t_general_id' => 'required|integer|exists:t_general,id']);

        $images = TImage::where('t_general_id', $request->t_general_id)
           // ->latest()
            ->get()
            ->map(fn($img) => [
                'id' => $img->id,
                'url' => asset('storage/' . $img->path)
            ]);

        return response()->json(['status' => true, 'images' => $images]);
    }


    public function addImage(Request $request)
    {
        TAlbumImage::create([
            't_general_id' => $request->t_general_id,
            'album_id' => $request->album_id,
            'image_id' => $request->image_id,
        ]);

        return response()->json(['status' => true, 'message' => 'Image added successfully']);
    }

    public function getAlbumImages($albumId)
    {
        $album = TAlbum::with('images')->find($albumId);
        $html = view('talent.steps.album-images', ['images' => $album->images])->render();
        return response()->json(['html' => $html]);
    }
}
