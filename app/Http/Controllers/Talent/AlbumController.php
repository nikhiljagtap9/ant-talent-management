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

    // get existing images
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

    // add images to album
    public function addImage(Request $request)
    {
        TAlbumImage::create([
            't_general_id' => $request->t_general_id,
            'album_id' => $request->album_id,
            'image_id' => $request->image_id,
        ]);

        return response()->json(['status' => true, 'message' => 'Image added successfully']);
    }

    // get album images 
    public function getAlbumImages($albumId)
    {
        // $album = TAlbum::with(['images' => function ($query) {
        //     $query->orderBy('order', 'asc'); // order images by ascending order
        // }])->find($albumId);
        $album = TAlbum::with('images')->find($albumId);
        $html = view('talent.steps.album-images', ['images' => $album->images])->render();
        return response()->json(['html' => $html]);
    }

    // delete image in album
    public function deleteImage($id)
    {
        $record = TAlbumImage::find($id);

        if (!$record) {
            return response()->json(['success' => false, 'message' => 'Image not found']);
        }

        $record->delete();

        return response()->json(['success' => true, 'message' => 'Image deleted successfully']);
    }


    // rename album
    public function rename(Request $request)
    {
        $album = TAlbum::find($request->album_id);
        if (!$album) return response()->json(['status' => false, 'message' => 'Album not found']);

        $album->name = $request->name;
        $album->save();

        return response()->json(['status' => true, 'message' => 'Album renamed successfully']);
    }

    // delete album
    public function delete(Request $request)
    {
        $album = TAlbum::find($request->album_id);
        if (!$album) return response()->json(['status' => false, 'message' => 'Album not found']);

        $album->delete(); // or use soft delete if you prefer

        return response()->json(['status' => true, 'message' => 'Album deleted successfully']);
    }

    // Sort Image
    public function sortImages(Request $request, $albumId)
    {
        $order = $request->order;

        foreach ($order as $position => $imageId) {
                TAlbumImage::where('album_id', $albumId)
                ->where('id', $imageId)
                ->update(['order' => $position + 1]);
        }

        return response()->json(['success' => true]);
    }


}
