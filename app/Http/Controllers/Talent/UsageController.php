<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TUsage;
use Illuminate\Support\Facades\Validator;

class UsageController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            't_general_id' => 'required|integer|exists:t_general,id',
            'event_type' => 'nullable|string|max:255',
            'usage_type' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'product' => 'nullable|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'booker' => 'nullable|string|max:255',
            'exclusivity' => 'nullable|string|max:255',
            'board' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()]);
        }

        try {
            // Update or Create logic
            if ($request->id) {
                $usage = TUsage::findOrFail($request->id);
                $message = 'Usage details updated successfully!';
            } else {
                $usage = new TUsage();
                $message = 'Usage details saved successfully!';
            }

            $usage->fill([
                't_general_id' => $request->t_general_id,
                'event_type' => $request->event_type,
                'usage_type' => $request->usage_type,
                'client' => $request->client,
                'product' => $request->product,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'booker' => $request->booker,
                'exclusivity' => $request->exclusivity,
                'board' => $request->board,
            ]);

            $usage->save();

            return response()->json([
                'status' => true,
                'message' => $message,
                'id' => $usage->id,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ]);
        }
    }
}
