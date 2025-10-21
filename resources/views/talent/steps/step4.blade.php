<div class="">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <h5>Agencies</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="wrap_form" id="agenciesForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="t_general_id" class="general_id"  value="{{ old('t_general_id', $general->id ?? '') }}">
                    
                        <div class="seprt_tab seprt_tab_full" id="agency_wrapper">
                            <div class="clear"></div>
                            <br>
                            @forelse($agencies as $index => $agency)
                                <div class="singl_socil">
                                    <input type="hidden" name="agency[{{ $index }}][id]" value="{{ $agency->id ?? '' }}">
                                    <div class="mb-3 col-md-2 smal_5">
                                        <label class="form-label">Agency Name</label>
                                        <select class="form-control" name="agency[{{ $index }}][agency_name]" >
                                            <option value="">Select Agency</option>
                                            <option value="Agency 1" {{ $agency->agency_name == 'Agency 1' ? 'selected' : '' }}>Agency 1</option>
                                            <option value="Agency 2" {{ $agency->agency_name == 'Agency 2' ? 'selected' : '' }}>Agency 2</option>
                                            <option value="Agency 3" {{ $agency->agency_name == 'Agency 3' ? 'selected' : '' }}>Agency 3</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-2 smal_5">
                                        <label class="form-label">Mother Agency %:</label>
                                        <input type="text" name="agency[{{ $index }}][mother_agency_percentage]" 
                                        value="{{ $agency->mother_agency_percentage ?? '' }}"
                                        class="form-control"  placeholder="Enter Mother Agency %:">
                                    </div>
                                    <div class="mb-3 col-md-2 smal_5">
                                        <label class="form-label">Assigned On</label>
                                        <select class="form-control" name="agency[{{ $index }}][assigned_on]">
                                            <option value="">Assigned On</option>
                                            <option value="Gross Rate" {{ $agency->assigned_on == 'Gross Rate' ? 'selected' : '' }}>Gross Rate</option>
                                            <option value="Talent Gross" {{ $agency->assigned_on == 'Talent Gross' ? 'selected' : '' }}>Talent Gross</option>
                                            <option value="Talent Net" {{ $agency->assigned_on == 'Talent Net' ? 'selected' : '' }}>Talent Net</option>
                                            <option value="Agency Comm." {{ $agency->assigned_on == 'Agency Comm.' ? 'selected' : '' }}>Agency Comm.</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-2 smal_5">
                                        <label class="form-label">Start Date</label>
                                        <input type="date" name="agency[{{ $index }}][start_date]" 
                                        value="{{ $agency->start_date ?? '' }}"
                                        class="form-control"  placeholder="Enter Phone">
                                    </div>
                                    <div class="mb-3 col-md-2 smal_5">
                                        <label class="form-label">End Date</label>
                                        <input type="date" name="agency[{{ $index }}][end_date]" 
                                        value="{{ $agency->end_date ?? '' }}"
                                        class="form-control"  placeholder="Enter Date">
                                    </div>
                                    <div class="clear"></div>
                                    <label class="child_as">
                                        <input type="checkbox" class="child_as_check" 
                                        name="agency[{{ $index }}][mother_agency]"
                                        {{ $agency->mother_agency ? 'checked' : '' }}>
                                        <div class="child_as_lbl" bis_skin_checked="1">Mother Agency</div>
                                        <div class="clear" bis_skin_checked="1"></div>
                                    </label>
                                    <label class="child_as">
                                        <input type="checkbox" class="child_as_check" 
                                        name="agency[{{ $index }}][other_mother_agency]" 
                                        {{ $agency->other_mother_agency ? 'checked' : '' }}>
                                        <div class="child_as_lbl" bis_skin_checked="1">Other Mother Agency</div>
                                        <div class="clear" bis_skin_checked="1"></div>
                                    </label>
                                    <label class="child_as">
                                        <input type="checkbox" class="child_as_check" 
                                        name="agency[{{ $index }}][placement]"
                                        {{ $agency->placement ? 'checked' : ''}}>
                                        <div class="child_as_lbl" bis_skin_checked="1">Placement</div>
                                        <div class="clear" bis_skin_checked="1"></div>
                                    </label>
                                    <label class="child_as">
                                        <input type="checkbox" class="child_as_check" 
                                        name="agency[{{ $index }}][contract_received]"
                                        {{ $agency->contract_received ? 'checked' : ''}}>
                                        <div class="child_as_lbl" bis_skin_checked="1">Contract Received</div>
                                        <div class="clear" bis_skin_checked="1"></div>
                                    </label>
                                    <!-- <button type="button" class="btn btn-danger btn-sm mt-2 remove_agency">Remove</button> -->
                                    <div class="clear"></div>
                                </div>
                            @empty
                                <div class="singl_socil">
                                    <input type="hidden" name="agency[0][id]" value="{{ $agency->id ?? '' }}">
                                    <div class="mb-3 col-md-2 smal_5">
                                        <label class="form-label">Agency Name</label>
                                        <select class="form-control" name="agency[0][agency_name]" >
                                            <option value="">Select Agency</option>
                                            <option value="Agency 1">Agency 1</option>
                                            <option value="Agency 2">Agency 2</option>
                                            <option value="Agency 3">Agency 3</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-2 smal_5">
                                        <label class="form-label">Mother Agency %:</label>
                                        <input type="text" name="agency[0][mother_agency_percentage]" class="form-control"  placeholder="Enter Mother Agency %:">
                                    </div>
                                    <div class="mb-3 col-md-2 smal_5">
                                        <label class="form-label">Assigned On</label>
                                        <select class="form-control" name="agency[0][assigned_on]">
                                            <option value="">Select Assigned On</option>
                                            <option value="Gross Rate">Gross Rate</option>
                                            <option value="Talent Gross">Talent Gross</option>
                                            <option value="Talent Net">Talent Net</option>
                                            <option value="Agency Comm.">Agency Comm.</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-2 smal_5">
                                        <label class="form-label">Start Date</label>
                                        <input type="date" name="agency[0][start_date]" class="form-control"  placeholder="Enter Phone">
                                    </div>
                                    <div class="mb-3 col-md-2 smal_5">
                                        <label class="form-label">End Date</label>
                                        <input type="date" name="agency[0][end_date]" class="form-control"  placeholder="Enter Mobile">
                                    </div>
                                    <div class="clear"></div>
                                    <label class="child_as">
                                        <input type="checkbox" class="child_as_check" name="agency[0][mother_agency]">
                                        <div class="child_as_lbl" bis_skin_checked="1">Mother Agency</div>
                                        <div class="clear" bis_skin_checked="1"></div>
                                    </label>
                                    <label class="child_as">
                                        <input type="checkbox" class="child_as_check" name="agency[0][other_mother_agency]">
                                        <div class="child_as_lbl" bis_skin_checked="1">Other Mother Agency</div>
                                        <div class="clear" bis_skin_checked="1"></div>
                                    </label>
                                    <label class="child_as">
                                        <input type="checkbox" class="child_as_check" name="agency[0][placement]">
                                        <div class="child_as_lbl" bis_skin_checked="1">Placemen</div>
                                        <div class="clear" bis_skin_checked="1"></div>
                                    </label>
                                    <label class="child_as">
                                        <input type="checkbox" class="child_as_check" name="agency[0][contract_received]">
                                        <div class="child_as_lbl" bis_skin_checked="1">Contract Received</div>
                                        <div class="clear" bis_skin_checked="1"></div>
                                    </label>
                                    <div class="clear"></div>
                                </div>
                            @endforelse    
                            <div class="clear"></div>
                            <button type="button" id="add_agency" class="ad_more_btn">Add More</button>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <button type="submit" class="submit_btn flot_right">Submit</button>
                    </form>
                </div>
                <div class="clear"></div>
                <div class="col-xl-12 col-md-12">
                    <div class="card table-card card_billing_in">
                    <div class="card-header">
                        <h5>Other Agencies</h5>
                    </div>
                    <div class="pro-scroll" style="height: 280px; position: relative">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover my_tble" id="agencyTable">
                                <thead>
                                    <tr>
                                        <th>Agency Name</th>
                                        <th>Country </th>
                                        <th>City</th>
                                        <th>Phone</th>
                                        <th>Mother<br>Agency %</th>
                                        <th>Assigned on</th>
                                        <th>Mother<br>Agency</th>
                                        <th>Other<br>Mother Agency</th>
                                        <th>Placement</th>
                                        <th>Contract<br>Received</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>