<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TAgency;
use Illuminate\Support\Facades\Validator;

class AgencyController extends Controller
{
    public function store(Request $request){
       try{
            // Validate parent record
            $request->validate([
                't_general_id' => 'required|integer|exists:t_general,id',
            ]);

            $agencies = $request->input('agency', []);

            if(empty($agencies)){
               return response()->json([
                    'status' => false,
                    'message' => 'No data provided.',
               ]);
            }

            $tGeneralId = $request->input('t_general_id');

            // Collect existing agency IDs submitted in the form
            $submittedIds = collect($agencies)->pluck('id')->filter()->toArray();

            // Delete agencies that were removed from the form
            TAgency::where('t_general_id', $tGeneralId)
                ->whereNotIn('id', $submittedIds)
                ->delete();

            // Create or update submitted agencies
            foreach ($agencies as $data) {
                // Skip completely empty rows
                if (empty(array_filter($data))) {
                    continue;
                }

                // Validate each agency entry
                $validator = Validator::make($data, [
                    'id' => 'nullable|integer|exists:t_agencies,id',
                    'agency_name' => 'nullable|string|max:255',
                    'mother_agency_percentage' => 'nullable|string|max:255',
                    'assigned_on' => 'nullable|string|max:255',
                    'start_date' => 'nullable|date',
                    'end_date' => 'nullable|date',
                    'mother_agency' => 'nullable|boolean',
                    'other_mother_agency' => 'nullable|boolean',
                    'placement' => 'nullable|boolean',
                    'contract_received' => 'nullable|boolean',
                ]);

                // Update or create Agency
                TAgency::updateOrCreate(
                    [
                        'id' => $data['id'] ?? null,
                        't_general_id' => $tGeneralId,
                    ],
                    [
                        'agency_name' => $data['agency_name'] ?? null,
                        'mother_agency_percentage' => $data['mother_agency_percentage'] ?? null,
                        'assigned_on' => $data['assigned_on'] ?? null,
                        'start_date' => $data['start_date'] ?? null,
                        'end_date' => $data['end_date'] ?? null,
                        'mother_agency' => isset($data['mother_agency']) ? 1 : 0,
                        'other_mother_agency' => isset($data['other_mother_agency']) ? 1 : 0,
                        'placement' => isset($data['placement']) ? 1 : 0,
                        'contract_received' => isset($data['contract_received']) ? 1 : 0,
                    ]
                );
            }

            return response()->json([
                'status' => true,
                'message' => 'Agency details saved successfully!',
            ]);

       } catch(\Throwable $e){
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ], 500);
       }
    }

    public function list($t_general_id){
        try {
            $agencies = TAgency::where('t_general_id',$t_general_id)
               ->orderByDesc('id')
               ->get();
    
            return response()->json([
                'status' => true,
                'data' => $agencies,
            ]);

        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ], 500);
        }
    }
}
