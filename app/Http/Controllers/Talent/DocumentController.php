<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TUserDocument;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            't_general_id' => 'required|integer|exists:t_general,id',
            'passport_number' => 'nullable|string|max:255',
            'passport_issue_date' => 'nullable|date',
            'passport_expiry_date' => 'nullable|date',
            'passport_country' => 'nullable|string|max:255',
            'passport_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

            'visa_number' => 'nullable|string|max:255',
            'visa_issue_date' => 'nullable|date',
            'visa_expiry_date' => 'nullable|date',
            'visa_country' => 'nullable|string|max:255',
            'visa_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

            'contract_initial_date' => 'nullable|date',
            'contract_expiry_date' => 'nullable|date',
            'contract_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

            'license_expiry_date' => 'nullable|date',
            'license_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',

            'photo_file' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',

            'other_comment' => 'nullable|string|max:255',
            'other_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()]);
        }

        try {
            // If editing existing record
            if ($request->id) {
                $document = TUserDocument::findOrFail($request->id);
                $message = 'Documents updated successfully!';
            } else {
                $document = new TUserDocument();
                $message = 'Documents saved successfully!';
            }

            $document->fill([
                't_general_id' => $request->t_general_id,
                'passport_number' => $request->passport_number,
                'passport_issue_date' => $request->passport_issue_date,
                'passport_expiry_date' => $request->passport_expiry_date,
                'passport_country' => $request->passport_country,
                'visa_number' => $request->visa_number,
                'visa_issue_date' => $request->visa_issue_date,
                'visa_expiry_date' => $request->visa_expiry_date,
                'visa_country' => $request->visa_country,
                'contract_initial_date' => $request->contract_initial_date,
                'contract_expiry_date' => $request->contract_expiry_date,
                'license_expiry_date' => $request->license_expiry_date,
                'other_comment' => $request->other_comment,
            ]);

            // Handle file uploads
            $fields = [
                'passport_file', 'visa_file', 'contract_file',
                'license_file', 'photo_file', 'other_file'
            ];

            foreach ($fields as $field) {
                if ($request->hasFile($field)) {
                    // Delete old file if it exists
                    if ($document->$field && Storage::exists('public/' . $document->$field)) {
                        Storage::delete('public/' . $document->$field);
                    }

                    // Save in folder named by t_general_id
                    $path = $request->file($field)->store('uploads/documents/' . $request->t_general_id, 'public');
                    $document->$field = $path;
                }
            }

            $document->save();

            return response()->json([
                'status' => true,
                'message' => $message,
                'id' => $document->id,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ]);
        }
    }

}
