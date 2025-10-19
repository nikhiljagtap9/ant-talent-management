<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TContact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    
    public function store(Request $request)
    {
        try {
            // Validate parent record
            $request->validate([
                't_general_id' => 'required|integer|exists:t_general,id',
            ]);

            $contacts = $request->input('contact', []);

            if (empty($contacts)) {
                return response()->json([
                    'status' => false,
                    'message' => 'No data provided.',
                ]);
            }

            $tGeneralId = $request->input('t_general_id');

            // Collect existing contact IDs submitted in the form
            $submittedIds = collect($contacts)->pluck('id')->filter()->toArray();

            // Delete contacts that were removed from the form
            TContact::where('t_general_id', $tGeneralId)
                ->whereNotIn('id', $submittedIds)
                ->delete();

            // Create or update submitted contacts
            foreach ($contacts as $contactData) {
                // Skip completely empty rows
                if (empty(array_filter($contactData))) {
                    continue;
                }

                // Validate each contact entry
                $validator = Validator::make($contactData, [
                    'id' => 'nullable|integer|exists:t_contacts,id',
                    'name' => 'nullable|string|max:255',
                    'relationship' => 'nullable|string|max:255',
                    'email' => 'nullable|email|max:255',
                    'mobile' => 'nullable|string|max:20',
                    'phone' => 'nullable|string|max:20',
                ]);

                // Update or create contact
                TContact::updateOrCreate(
                    [
                        'id' => $contactData['id'] ?? null,
                        't_general_id' => $tGeneralId,
                    ],
                    [
                        'name' => $contactData['name'] ?? null,
                        'relationship' => $contactData['relationship'] ?? null,
                        'email' => $contactData['email'] ?? null,
                        'mobile' => $contactData['mobile'] ?? null,
                        'phone' => $contactData['phone'] ?? null,
                    ]
                );
            }

            return response()->json([
                'status' => true,
                'message' => 'Contact details saved successfully!',
            ]);

        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function list($t_general_id)
    {
        try {
            $contacts = TContact::where('t_general_id',$t_general_id)
                ->orderByDesc('id')
                ->get();

            return response()->json([
                'status' => true,
                'data' => $contacts,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function edit($t_general_id)
    {
        $contacts = TContact::where('t_general_id', $t_general_id)->get();
        return view('your.view', compact('contacts', 't_general_id'));
    }
}
