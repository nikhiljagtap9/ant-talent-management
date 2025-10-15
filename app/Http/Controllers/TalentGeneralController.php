<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TGeneral;
use App\Models\TAddress;
use App\Models\TSocialMedia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TalentGeneralController extends Controller
{
     public function add()
    {
        $user = Auth::user();

        return view('talent.add', compact(
            'user'
        ));
    }

    public function view()
    {
        $user = Auth::user();

        return view('talent.view', compact(
            'user'
        ));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
          'first_name' => 'required|string|max:255',
          'gender' => 'required|string|max:50',
          'category' => 'required|array|min:1',
        ]);

        if($validator->fails()){
            return response()->json(['status'=>false,'errors'=>$validator->errors()]);
        }

        try {
            // Check if updating or creating new
            if($request->id){
              $general = TGeneral::findOrFail($request->id);
              $message = 'General information updated successfully!';
            } else {
              $general = new TGeneral();
              $message = 'General information saved successfully!';
            }

            // Fill fields (common for both create/update)
            $general->first_name = $request->first_name;
            $general->last_name = $request->last_name;
            $general->location = $request->location;
            $general->gender = $request->gender;
            $general->date_joined_agency = $request->date_joined_agency;
            $general->dob = $request->dob;
            $general->birth_place = $request->birth_place;
            $general->nationality = $request->nationality;
            $general->mobile = $request->mobile;
            $general->phone = $request->phone;
            $general->website = $request->website;
            $general->email = $request->email;
            $general->state = $request->state;
            $general->zip = $request->zip;
            $general->country = $request->country;
            $general->minimum_tariff = $request->minimum_tariff;
            $general->minimum_hourly_rate = $request->minimum_hourly_rate;
            $general->minimum_day_rate = $request->minimum_day_rate;
            $general->kids = $request->has('kids');
            $general->allow_sms = $request->has('allow_sms');
            $general->email_icalendar = $request->has('email_icalendar');
            $general->category = implode(',', $request->category);
            $general->save();

            // Handle Addresses (update or create)
            if ($request->addresses && is_array($request->addresses)) {

                // Collect existing IDs from submitted form
                $submittedIds = collect($request->addresses)->pluck('id')->filter();

                // Delete any addresses that were removed from form
                TAddress::where('t_general_id', $general->id)
                        ->whereNotIn('id', $submittedIds)
                        ->delete();

                foreach ($request->addresses as $addr) {
                    if (!empty($addr['id'])) {
                        // Update existing address
                        $address = TAddress::where('id', $addr['id'])
                            ->where('t_general_id', $general->id)
                            ->first();
                        if ($address) {
                            $address->update([
                                'address1' => $addr['address1'] ?? null,
                                'address2' => $addr['address2'] ?? null,
                                'city' => $addr['city'] ?? null,
                                'state' => $addr['state'] ?? null,
                                'zip' => $addr['zip'] ?? null,
                                'country' => $addr['country'] ?? null,
                            ]);
                        }
                    } else {
                        // Create new address
                        TAddress::create([
                            't_general_id' => $general->id,
                            'address1' => $addr['address1'] ?? null,
                            'address2' => $addr['address2'] ?? null,
                            'city' => $addr['city'] ?? null,
                            'state' => $addr['state'] ?? null,
                            'zip' => $addr['zip'] ?? null,
                            'country' => $addr['country'] ?? null,
                        ]);
                    }
                }
            }

            // Handle Social Media (update or create)
            if ($request->social_media && is_array($request->social_media)) {

                // Collect existing IDs from submitted form
                $submittedIds = collect($request->social_media)->pluck('id')->filter();

                // Delete any addresses that were removed from form
                TSocialMedia::where('t_general_id', $general->id)
                            ->whereNotIn('id', $submittedIds)
                            ->delete();
                            
                foreach ($request->social_media as $media) {
                    if (!empty($media['id'])) {
                        // Update existing record
                        $social = TSocialMedia::where('id', $media['id'])
                            ->where('t_general_id', $general->id)
                            ->first();
                        if ($social) {
                            $social->update([
                                'media' => $media['media'] ?? null,
                                'url' => $media['url'] ?? null,
                                'number' => $media['number'] ?? null,
                                'date_updated' => $media['date_updated'] ?? null,
                            ]);
                        }
                    } else {
                        // Create new social media entry
                        TSocialMedia::create([
                            't_general_id' => $general->id,
                            'media' => $media['media'] ?? null,
                            'url' => $media['url'] ?? null,
                            'number' => $media['number'] ?? null,
                            'date_updated' => $media['date_updated'] ?? null,
                        ]);
                    }
                }
            }

            return response()->json([
                'status' => true,
                'message' => $message,
                'id' => $general->id,
            ]);

        }   catch (\Exception $e) {
                return response()->json([
                    'status' => false,
                    'message' => 'Something went wrong: ' . $e->getMessage(),
                ]);
        }
    }
}
