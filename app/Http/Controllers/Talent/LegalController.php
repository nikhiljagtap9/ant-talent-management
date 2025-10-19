<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use App\Models\TLegal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LegalController extends Controller
{
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'legal_first_name' => 'required|string|max:255',
        //     'legal_last_name'  => 'required|string|max:255',
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['status' => false, 'errors' => $validator->errors()]);
        // }

        try {
            // Update or Create logic
            if ($request->id) {
                $legal = TLegal::findOrFail($request->id);
                $message = 'Legal details updated successfully!';
            } else {
                $legal = new TLegal();
                $message = 'Legal details saved successfully!';
            }

            $legal->fill([
                't_general_id' => $request->t_general_id,
                'legal_first_name' => $request->legal_first_name,
                'legal_middle_name' => $request->legal_middle_name,
                'legal_last_name' => $request->legal_last_name,
                'company_name' => $request->company_name,
                'is_non_resident' => $request->has('is_non_resident'),
                'is_freelancer' => $request->has('is_freelancer'),
                'id_ss_number' => $request->id_ss_number,
                'tax_number' => $request->tax_number,
                'accounting_number' => $request->accounting_number,
                'insurance_number' => $request->insurance_number,
                'talent_tax_percent' => $request->talent_tax_percent,
                'own_tax_responsible' => $request->has('own_tax_responsible'),
                'talent_commission_percent' => $request->talent_commission_percent,
                'account_balance' => $request->account_balance,
                'reserve_amount' => $request->reserve_amount,
                'credit_status' => $request->credit_status,
                'contract_name' => $request->contract_name,
                'contract_signed_on' => $request->contract_signed_on,
                'contract_expires_on' => $request->contract_expires_on,
                'contract_is_back' => $request->has('contract_is_back'),
                'work_permit' => $request->work_permit,
                'permit_country' => $request->permit_country,
                'permit_issued_on' => $request->permit_issued_on,
                'permit_expires_on' => $request->permit_expires_on,
                'stop_payments' => $request->has('stop_payments'),
                'stop_payments_notes' => $request->stop_payments_notes,
            ]);

            $legal->save();

            return response()->json([
                'status' => true,
                'message' => $message,
                'id' => $legal->id,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ]);
        }
    }
}

