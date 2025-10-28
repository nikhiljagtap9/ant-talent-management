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

    public function saveCrop(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:t_images,id',
            'cropped_image' => 'required|string', // base64 string
        ]);

        $image = \App\Models\TImage::find($request->id);

        // Decode base64 image
        $imageData = $request->cropped_image;
        $imageData = preg_replace('#^data:image/\w+;base64,#i', '', $imageData);
        $imageBinary = base64_decode($imageData);

        // Generate new filename
        $filename = 'uploads/documents/images/' . $image->t_general_id . '/' . uniqid('crop_') . '.png';

        // Save to storage/public
        Storage::disk('public')->put($filename, $imageBinary);

        // Delete old image (optional)
        if ($image->path && Storage::disk('public')->exists($image->path)) {
            Storage::disk('public')->delete($image->path);
        }

        // Update DB record
        $image->update(['path' => $filename]);

        return response()->json([
            'status' => true,
            'message' => 'Cropped image saved successfully!',
            'url' => asset('storage/' . $filename)
        ]);
    }

    public function updateRotation(Request $request)
    {   
        $request->validate([
            'id' => 'required|integer|exists:t_images,id',
            'rotation' => 'required|integer',
        ]);
        
        $image = TImage::find($request->id);
        $image->rotation = $request->rotation;
        $image->save();

        return response()->json(['status' => true, 'message' => 'Rotation updated successfully']);
    }
    


    public function delete($id)
    {
        $image = TImage::findOrFail($id);
        Storage::disk('public')->delete($image->path);
        $image->delete();

        return response()->json(['status' => true, 'message' => 'Image deleted successfully.']);
    }
}

