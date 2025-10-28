<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TVideo;

class VideoController extends Controller
{
    public function uploadVideo(Request $request)
    {
        $request->validate([
            't_general_id' => 'required|integer|exists:t_general,id',
            'title' => 'required|string|max:255',
            'embed_code' => 'required|string',
            'download_link' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        $video = TVideo::updateOrCreate(
            ['id' => $request->id], // if id exists -> update, else create
            [
                't_general_id' => $request->t_general_id,
                'title' => $request->title,
                'embed_code' => $request->embed_code,
                'download_link' => $request->download_link,
                'description' => $request->description,
            ]
        );

        return response()->json([
            'status' => true,
            'message' => $request->id ? 'Video updated successfully!' : 'Video added successfully!',
            'video' => $video
        ]);
    }

    public function deleteVideo(Request $request)
    {
        $video = TVideo::find($request->id);

        if (!$video) {
            return response()->json(['status' => false, 'message' => 'Video not found.']);
        }

        $video->delete();

        return response()->json(['status' => true, 'message' => 'Video deleted successfully.']);
    }


}
