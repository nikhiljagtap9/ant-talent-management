<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TImage;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            't_general_id' => 'required|integer|exists:t_general,id',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $uploadedImages = [];

        foreach ($request->file('images') as $image) {
            $path = $image->store('uploads/documents/images/' . $request->t_general_id, 'public');
            $tImage = TImage::create([
                't_general_id' => $request->t_general_id,
                'path' => $path,
            ]);
            $uploadedImages[] = [
                'id' => $tImage->id,
                'url' => asset('storage/' . $path)
            ];
        }

        return response()->json([
            'status' => true,
            'images' => $uploadedImages
        ]);
    }

    public function delete($id)
    {
        $image = TImage::findOrFail($id);
        Storage::disk('public')->delete($image->path);
        $image->delete();

        return response()->json(['status' => true, 'message' => 'Image deleted successfully.']);
    }
}

