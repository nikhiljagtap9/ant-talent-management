<div class="">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <h5>General</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="wrap_form" id="general" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" class="general_id" value="{{ old('id', $general->id ?? '') }}">
                    <div class="mb-3 col-md-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $general->first_name ?? '') }}"  placeholder="Enter First Name">
                    </div>
                    <div class="mb-3 col-md-3 md_3_1">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $general->last_name ?? '') }}" placeholder="Enter Last Name">
                    </div>
                    <div class="mb-3 col-md-3 md_3_2">
                        <label class="form-label">Location</label>
                        <select class="form-control" name="location">
                            <option value="">Select Location</option>
                            <option value="Doha" {{ optional($general)->location == 'Doha' ? 'selected' : '' }}>Doha</option>
                            <option value="Dubai" {{ optional($general)->location == 'Dubai' ? 'selected' : '' }}>Dubai</option>
                            <option value="In Town" {{ optional($general)->location == 'In Town' ? 'selected' : '' }}>In Town</option>
                            <option value="Aaudi Arabia" {{ optional($general)->location == 'Aaudi Arabia' ? 'selected' : '' }}>Aaudi Arabia</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-3 md_3_4">
                        <label class="form-label">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="Male" {{ optional($general)->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ optional($general)->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                    <div class="clear"></div>
                    <div class="mb-3 col-md-3 ">
                        <label class="form-label">Date Joined Agency</label>
                        <input type="date" name="date_joined_agency" value="{{ old('date_joined_agency', $general->date_joined_agency ?? '') }}" class="form-control"  placeholder="">
                    </div>
                    <div class="mb-3 col-md-3 md_3_1">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" value="{{ old('dob', $general->dob ?? '') }}" placeholder="">
                    </div>
                    <div class="mb-3 col-md-3 md_3_2">
                        <label class="form-label">Birth Place</label>
                        <input type="text" name="birth_place" class="form-control" value="{{ old('birth_place', $general->birth_place ?? '') }}"  placeholder="Enter Birth Place">
                    </div>
                    <div class="mb-3 col-md-3 md_3_4">
                        <label class="form-label">Nationality</label>
                        <input type="text" name="nationality" class="form-control" value="{{ old('nationality', $general->nationality ?? '') }}" placeholder="Enter Nationality">
                    </div>
                    <div class="clear"></div>
                    <div class="mb-3 col-md-3">
                        <label class="form-label">Mobile</label>
                        <input type="text" name="mobile" class="form-control" value="{{ old('mobile', $general->mobile ?? '') }}" placeholder="Enter Mobile">
                    </div>
                    <div class="mb-3 col-md-3 md_3_1">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $general->phone ?? '') }}" placeholder="Enter Phone">
                    </div>
                    <div class="mb-3 col-md-3 md_3_2">
                        <label class="form-label">Website</label>
                        <input type="text" name="website" class="form-control" value="{{ old('website', $general->website ?? '') }}" placeholder="Enter Website">
                    </div>
                    <div class="mb-3 col-md-3 md_3_4">
                        <label class="form-label">Email ID</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email', $general->email ?? '') }}" placeholder="Enter Email ID">
                    </div>
                    <div class="clear"></div>
                    <div class="mb-3 col-md-3 ">
                        <label class="form-label">State</label>
                        <input type="text" name="state" class="form-control" value="{{ old('state', $general->state ?? '') }}" placeholder="Enter State">
                    </div>
                    <div class="mb-3 col-md-3 md_3_1">
                        <label class="form-label">State</label>
                        <input type="text" name="phone" class="form-control" value="{{ old('phone', $general->phone ?? '') }}" placeholder="Enter State">
                    </div>
                    <div class="mb-3 col-md-3 md_3_2">
                        <label class="form-label">Zip</label>
                        <input type="text" name="zip" class="form-control" value="{{ old('zip', $general->zip ?? '') }}" placeholder="Enter Zip">
                    </div>
                    <div class="mb-3 col-md-3 md_3_4">
                        <label class="form-label">Country</label>
                        <input type="text" name="country" class="form-control" value="{{ old('country', $general->country ?? '') }}" placeholder="Enter Country">
                    </div>
                    <div class="clear"></div>
                    <div class="mb-3 col-md-3">
                        <label class="form-label">Talent ID</label>
                        <input type="text" id="talent_id"  class="form-control" value="{{ old('id', $general->id ?? '') }}" readonly >
                    </div>
                    <div class="mb-3 col-md-3 md_3_1">
                        <label class="form-label">Minimum Tariff</label>
                        <input type="text" name="minimum_tariff" class="form-control" value="{{ old('minimum_tariff', $general->minimum_tariff ?? '') }}" placeholder="Enter Minimum Tariff">
                    </div>
                    <div class="mb-3 col-md-3 md_3_2">
                        <label class="form-label">Minimum Hourly Rate</label>
                        <input type="text" name="minimum_hourly_rate" class="form-control" value="{{ old('minimum_hourly_rate', $general->minimum_hourly_rate ?? '') }}" placeholder="Enter Minimum Hourly Rate">
                    </div>
                    <div class="mb-3 col-md-3 md_3_4">
                        <label class="form-label">Minimum Day Rate </label>
                        <input type="text" name="minimum_day_rate" class="form-control" value="{{ old('minimum_day_rate', $general->minimum_day_rate ?? '') }}" placeholder="Enter Minimum Day Rate">
                    </div>
                    <div class="clear"></div>
                    <label class="child_as">
                        <input type="checkbox" name="kids" {{ !empty($general->kids) && $general->kids ? 'checked' : '' }} class="child_as_check" >
                        <div class="child_as_lbl">Kids</div>
                        <div class="clear"></div>
                    </label>
                    <label class="child_as">
                        <input type="checkbox" name="allow_sms" {{ !empty($general->allow_sms) && $general->allow_sms ? 'checked' : '' }} class="child_as_check" >
                        <div class="child_as_lbl">Allow SMS</div>
                        <div class="clear"></div>
                    </label>
                    <label class="child_as">
                        <input type="checkbox" name="email_icalendar" {{ !empty($general->email_icalendar) && $general->email_icalendar ? 'checked' : '' }} class="child_as_check" >
                        <div class="child_as_lbl">Email iCalendar</div>
                        <div class="clear"></div>
                    </label>
                    <div class="clear"></div>
                    <!-- Address section-->
                    <div class="seprt_tab seprt_tab_1" id="addresses_wrapper">
                        <div class="card-header" bis_skin_checked="1">
                            <h5>Addresses</h5>
                        </div>
                        @forelse($addresses as $index => $address)
                            <div class="singl_socil singl_socil_2 address_block">
                                <input type="hidden" name="addresses[{{ $index }}][id]" value="{{ $address->id ?? '' }}">

                                <div class="mb-3 input_hlaf">
                                    <label class="form-label">Address 1</label>
                                    <textarea name="addresses[{{ $index }}][address1]" class="form-control" rows="2">{{ $address->address1 ?? '' }}</textarea>
                                </div>

                                <div class="mb-3 input_hlaf input_hlaf_right">
                                    <label class="form-label">Address 2</label>
                                    <textarea name="addresses[{{ $index }}][address2]" class="form-control" rows="2">{{ $address->address2 ?? '' }}</textarea>
                                </div>

                                <div class="clear"></div>

                                <div class="mb-3 col-md-3">
                                    <label class="form-label">City</label>
                                    <input name="addresses[{{ $index }}][city]" type="text" class="form-control" value="{{ $address->city ?? '' }}" placeholder="Enter City">
                                </div>

                                <div class="mb-3 col-md-3 md_3_1">
                                    <label class="form-label">State</label>
                                    <input name="addresses[{{ $index }}][state]" type="text" class="form-control" value="{{ $address->state ?? '' }}" placeholder="Enter State">
                                </div>

                                <div class="mb-3 col-md-3 md_3_2">
                                    <label class="form-label">ZIP</label>
                                    <input name="addresses[{{ $index }}][zip]" type="text" class="form-control" value="{{ $address->zip ?? '' }}" placeholder="Enter ZIP">
                                </div>

                                <div class="mb-3 col-md-3 md_3_4">
                                    <label class="form-label">Country</label>
                                    <input name="addresses[{{ $index }}][country]" type="text" class="form-control" value="{{ $address->country ?? '' }}" placeholder="Enter Country">
                                </div>

                                <!-- <button type="button" class="btn btn-danger btn-sm remove-address">Remove</button> -->
                                <div class="clear"></div>
                            </div>
                        @empty
                            <div class="singl_socil singl_socil_2 address_block">
                                <input type="hidden" name="addresses[0][id]" value="{{ $address->id ?? '' }}">
                                <div class="mb-3 input_hlaf">
                                    <label class="form-label">Address 1</label>
                                    <textarea name="addresses[0][address1]" class="form-control" rows="2" ></textarea>
                                </div>
                                <div class="mb-3 input_hlaf input_hlaf_right">
                                    <label class="form-label">Address 2</label>
                                    <textarea name="addresses[0][address2]" class="form-control" rows="2" ></textarea>
                                </div>
                                <div class="clear"></div>
                                <div class="mb-3 col-md-3 ">
                                    <label class="form-label">City</label>
                                    <input name="addresses[0][city]" type="text" class="form-control"  placeholder="Enter City">
                                </div>
                                <div class="mb-3 col-md-3 md_3_1">
                                    <label class="form-label">State</label>
                                    <input name="addresses[0][state]" type="text" class="form-control"  placeholder="Enter State">
                                </div>
                                <div class="mb-3 col-md-3 md_3_2">
                                    <label class="form-label">ZIP</label>
                                    <input name="addresses[0][zip]" type="text" class="form-control"  placeholder="Enter ZIP">
                                </div>
                                <div class="mb-3 col-md-3 md_3_4">
                                    <label class="form-label">Country </label>
                                    <input name="addresses[0][country]" type="text" class="form-control"  placeholder="Enter Country">
                                </div>
                            </div>
                        @endforelse

                        <div class="clear"></div>
                        <button type="button" id="add_address" class="ad_more_btn ad_more_btn_2">Add More</button>
                        <!-- <a class="ad_more_btn ad_more_btn_2" id="add_address" href="">Add More</a> -->
                        <div class="clear"></div>
                    </div>
                    <!-- Category section -->
                    <div class="seprt_tab seprt_tab_2 category_section">
                        <div class="card-header categry_as" bis_skin_checked="1">
                            <h5>Category</h5>
                        </div>
                        <div class="clear"></div>
                        <label class="labl_arcv">
                            <input type="checkbox" name="category[]"  
                            {{ in_array('Models', old('category', $categories ?? [])) ? 'checked' : '' }}
                            class="chbox" value="Models">
                            <div class="chbox_title">Models </div>
                            <div class="clear"></div>
                        </label>
                        <label class="labl_arcv">
                            <input type="checkbox" name="category[]" 
                            {{ in_array('Talent', old('category', $categories ?? [])) ? 'checked' : '' }}
                            class="chbox" value="Talent">
                            <div class="chbox_title">Talent   </div>
                            <div class="clear"></div>
                        </label>
                        <label class="labl_arcv">
                            <input type="checkbox" name="category[]" 
                            {{ in_array('Influencer', old('category', $categories ?? [])) ? 'checked' : '' }}
                            class="chbox" value="Influencer" >
                            <div class="chbox_title">Influencer   </div>
                            <div class="clear"></div>
                        </label>
                        <label class="labl_arcv">
                            <input type="checkbox" name="category[]" 
                            {{ in_array('Sports', old('category', $categories ?? [])) ? 'checked' : '' }}
                            class="chbox" value="Sports">
                            <div class="chbox_title">Sports   </div>
                            <div class="clear"></div>
                        </label>
                        <label class="labl_arcv">
                            <input type="checkbox" name="category[]" 
                            {{ in_array('Global', old('category', $categories ?? [])) ? 'checked' : '' }}
                            class="chbox" value="Global">
                            <div class="chbox_title">Global </div>
                            <div class="clear"></div>
                        </label>
                        <label class="labl_arcv">
                            <input type="checkbox" name="category[]"
                            {{ in_array('Creatives', old('category', $categories ?? [])) ? 'checked' : '' }}
                            class="chbox" value="Creatives">
                            <div class="chbox_title">Creatives </div>
                            <div class="clear"></div>
                        </label>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <!-- Social Media section-->
                    <div class="seprt_tab seprt_tab_full" id="social_wrapper">
                        <div class="card-header" bis_skin_checked="1">
                            <h5>Social Media</h5>
                        </div>
                        <div class="clear"></div>
                        @forelse($socialMedia as $index => $social)
                            <div class="singl_socil social-block">
                                <input type="hidden" name="social_media[{{ $index }}][id]" value="{{ $social->id ?? '' }}">
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Media</label>
                                    <input type="text" name="social_media[{{ $index }}][media]" class="form-control" value="{{ $social->media ?? '' }}" placeholder="Enter Media Name">
                                </div>
                                <div class="mb-3 col-md-3 md_3_1">
                                    <label class="form-label">URL/Name</label>
                                    <input type="text" name="social_media[{{ $index }}][url]" class="form-control" value="{{ $social->url ?? '' }}" placeholder="Enter URL/Name">
                                </div>
                                <div class="mb-3 col-md-3 md_3_2">
                                    <label class="form-label">Number</label>
                                    <input type="text" name="social_media[{{ $index }}][number]" class="form-control" value="{{ $social->number ?? '' }}" placeholder="Enter Number">
                                </div>
                                <div class="mb-3 col-md-3 md_3_4">
                                    <label class="form-label">Date Updated</label>
                                    <input type="text" name="social_media[{{ $index }}][date_updated]" class="form-control" value="{{ $social->date_updated ?? '' }}" placeholder="Enter Date">
                                </div>
                                <!-- <button type="button" class="btn btn-danger btn-sm remove-social">Remove</button> -->
                                <div class="clear"></div>
                            </div>
                        @empty
                            <div class="singl_socil">
                                <input type="hidden" name="social_media[0][id]" value="{{ $social->id ?? '' }}">
                                <div class="mb-3 col-md-3 ">
                                    <label class="form-label">Media</label>
                                    <input type="text" name="social_media[0][media]" class="form-control"  placeholder="Enter Media Name">
                                </div>
                                <div class="mb-3 col-md-3 md_3_1">
                                    <label class="form-label">URL/Name</label>
                                    <input type="text" name="social_media[0][url]" class="form-control"  placeholder="Enter State">
                                </div>
                                <div class="mb-3 col-md-3 md_3_2">
                                    <label class="form-label">Number</label>
                                    <input type="text" name="social_media[0][number]" class="form-control"  placeholder="Enter Number">
                                </div>
                                <div class="mb-3 col-md-3 md_3_4">
                                    <label class="form-label">Date Updated </label>
                                    <input type="text" name="social_media[0][date_updated]" class="form-control"  placeholder="Enter Country">
                                </div>
                            </div>
                        @endforelse    
                        <div class="clear"></div>
                        <button type="button" id="add_social" class="ad_more_btn">Add More</button>
                        <!-- <a class="ad_more_btn" href="#" id="add_social">Add More</a> -->
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <button type="submit" class="submit_btn flot_right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="clear"></div>

