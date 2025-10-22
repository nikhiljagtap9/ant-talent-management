<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\{TStat, TSkill, TQuestionnaire, TFingerSize};

class StatsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            't_general_id' => 'required|integer|exists:t_general,id',

            // TStat fields
            'last_measured_date' => 'nullable|date',
            'height' => 'nullable|string|max:50',
            'bust' => 'nullable|string|max:50',
            'waist' => 'nullable|string|max:50',
            'hips' => 'nullable|string|max:50',
            'cup' => 'nullable|string|max:50',
            'shoe' => 'nullable|string|max:50',
            'dress_top' => 'nullable|string|max:50',
            'bottom' => 'nullable|string|max:50',
            'eye_color' => 'nullable|string|max:50',
            'hair_color' => 'nullable|string|max:50',
            'hair_length' => 'nullable|string|max:50',
            'hair_type' => 'nullable|string|max:50',
            'body_type' => 'nullable|string|max:50',
            'ethnic' => 'nullable|string|max:50',
            'head' => 'nullable|string|max:50',
            'collar' => 'nullable|string|max:50',
            'gloves' => 'nullable|string|max:50',
            'wrist_size' => 'nullable|string|max:50',
            'inseam' => 'nullable|string|max:50',
            'outseam' => 'nullable|string|max:50',
            'sleeve' => 'nullable|string|max:50',
            'custom_shoe_size' => 'nullable|string|max:50',
            'weight' => 'nullable|string|max:50',

            // TSkill
            'skills' => 'nullable|array',
            'skills.*.skill' => 'nullable|string|max:255',
            'skills.*.level' => 'nullable|string|max:50',
            'skills.*.notes' => 'nullable|string|max:255',

            // TQuestionnaire
            'questionnaires' => 'nullable|array',
            'questionnaires.*.question' => 'nullable|string|max:255',
            'questionnaires.*.status' => 'nullable|string|max:50',
            'questionnaires.*.notes' => 'nullable|string|max:255',

            // TFingerSize
            'left_thumb' => 'nullable|string|max:50',
            'right_thumb' => 'nullable|string|max:50',
            'left_index' => 'nullable|string|max:50',
            'right_index' => 'nullable|string|max:50',
            'left_middle' => 'nullable|string|max:50',
            'right_middle' => 'nullable|string|max:50',
            'left_ring' => 'nullable|string|max:50',
            'right_ring' => 'nullable|string|max:50',
            'left_little' => 'nullable|string|max:50',
            'right_little' => 'nullable|string|max:50',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $tGeneralId = $data['t_general_id'];

        // ✅ 1. Save or update measurements (t_stats)
        $stats = TStat::updateOrCreate(
            ['t_general_id' => $tGeneralId],
            $data
        );

        // ✅ 2. Save or update finger sizes (t_finger_sizes)
        $fingerData = collect($data)->only([
            'left_thumb', 'right_thumb',
            'left_index', 'right_index',
            'left_middle', 'right_middle',
            'left_ring', 'right_ring',
            'left_little', 'right_little',
        ])->filter()->toArray();

        if (!empty($fingerData)) {
            TFingerSize::updateOrCreate(
                ['t_general_id' => $tGeneralId],
                $fingerData
            );
        }

        // ✅ 3. Save skills (t_skills)
        if (!empty($data['skills'])) {
            TSkill::where('t_general_id', $tGeneralId)->delete(); // remove old
            foreach ($data['skills'] as $skill) {
                if (!empty(array_filter($skill))) {
                    $skill['t_general_id'] = $tGeneralId;
                    TSkill::create($skill);
                }
            }
        }

        // ✅ 4. Save questionnaires (t_questionnaires)
        if (!empty($data['questionnaires'])) {
            TQuestionnaire::where('t_general_id', $tGeneralId)->delete();
            foreach ($data['questionnaires'] as $q) {
                if (!empty(array_filter($q))) {
                    $q['t_general_id'] = $tGeneralId;
                    TQuestionnaire::create($q);
                }
            }
        }

        return response()->json([
            'status' => true,
            'message' => 'Stats saved successfully!',
            'id' => $stats->id,
        ]);
    }
}
