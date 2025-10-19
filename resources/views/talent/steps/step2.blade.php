<div class="">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Legal</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form class="wrap_form" id="legal" enctype="multipart/form-data">
                            @csrf

                            {{-- Hidden fields --}}
                            <input type="hidden" name="t_general_id" class="general_id" value="{{ old('t_general_id', $general->id ?? '') }}">
                            <input type="hidden" name="id" id="legal_id" value="{{ old('id', optional($legal)->id) }}">

                            {{-- Legal names --}}
                            <div class="mb-3 col-md-3">
                                <label class="form-label">Legal First Name</label>
                                <input type="text" name="legal_first_name"
                                    value="{{ old('legal_first_name', optional($legal)->legal_first_name) }}"
                                    class="form-control" placeholder="Enter Legal First Name">
                            </div>

                            <div class="mb-3 col-md-3 md_3_1">
                                <label class="form-label">Legal Middle Name</label>
                                <input type="text" name="legal_middle_name"
                                    value="{{ old('legal_middle_name', optional($legal)->legal_middle_name) }}"
                                    class="form-control" placeholder="Enter Legal Middle Name">
                            </div>

                            <div class="mb-3 col-md-3 md_3_2">
                                <label class="form-label">Legal Last Name</label>
                                <input type="text" name="legal_last_name"
                                    value="{{ old('legal_last_name', optional($legal)->legal_last_name) }}"
                                    class="form-control" placeholder="Enter Legal Last Name">
                            </div>

                            <div class="mb-3 col-md-3 md_3_4">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="company_name"
                                    value="{{ old('company_name', optional($legal)->company_name) }}"
                                    class="form-control" placeholder="Enter Company Name">
                            </div>

                            <div class="clear"></div>

                            {{-- Checkboxes --}}
                            <label class="child_as">
                                <input type="checkbox" name="is_non_resident"
                                    class="child_as_check"
                                    {{ old('is_non_resident', optional($legal)->is_non_resident) ? 'checked' : '' }}>
                                <div class="child_as_lbl">Non-Resident</div>
                                <div class="clear"></div>
                            </label>

                            <label class="child_as">
                                <input type="checkbox" name="is_freelancer"
                                    class="child_as_check"
                                    {{ old('is_freelancer', optional($legal)->is_freelancer) ? 'checked' : '' }}>
                                <div class="child_as_lbl">Freelancer / Entrepreneur</div>
                                <div class="clear"></div>
                            </label>

                            <div class="clear"></div>

                            {{-- Identification fields --}}
                            <div class="mb-3 col-md-2 smal_5">
                                <label class="form-label">ID/SS Number</label>
                                <input type="text" name="id_ss_number"
                                    value="{{ old('id_ss_number', optional($legal)->id_ss_number) }}"
                                    class="form-control" placeholder="Enter ID/SS Number">
                            </div>

                            <div class="mb-3 col-md-2 smal_5">
                                <label class="form-label">Tax #</label>
                                <input type="text" name="tax_number"
                                    value="{{ old('tax_number', optional($legal)->tax_number) }}"
                                    class="form-control" placeholder="Enter Tax #">
                            </div>

                            <div class="mb-3 col-md-2 smal_5">
                                <label class="form-label">Accounting #</label>
                                <input type="text" name="accounting_number"
                                    value="{{ old('accounting_number', optional($legal)->accounting_number) }}"
                                    class="form-control" placeholder="Enter Accounting #">
                            </div>

                            <div class="mb-3 col-md-2 smal_5">
                                <label class="form-label">Insurance #</label>
                                <input type="text" name="insurance_number"
                                    value="{{ old('insurance_number', optional($legal)->insurance_number) }}"
                                    class="form-control" placeholder="Enter Insurance #">
                            </div>

                            <div class="mb-3 col-md-2 smal_5 smal_5_ri">
                                <label class="form-label">Talent Tax %</label>
                                <input type="text" name="talent_tax_percent"
                                    value="{{ old('talent_tax_percent', optional($legal)->talent_tax_percent) }}"
                                    class="form-control" placeholder="Enter Talent Tax %">
                            </div>

                            <div class="clear"></div>

                            {{-- Own Tax Responsible --}}
                            <label class="child_as">
                                <input type="checkbox" name="own_tax_responsible"
                                    class="child_as_check"
                                    {{ old('own_tax_responsible', optional($legal)->own_tax_responsible) ? 'checked' : '' }}>
                                <div class="child_as_lbl">Own Tax Responsible</div>
                                <div class="clear"></div>
                            </label>

                            <div class="clear"></div>

                            {{-- Financial details --}}
                            <div class="mb-3 col-md-3 md_3_1">
                                <label class="form-label">Talent Comm. %</label>
                                <input type="text" name="talent_commission_percent"
                                    value="{{ old('talent_commission_percent', optional($legal)->talent_commission_percent) }}"
                                    class="form-control" placeholder="Enter Talent Comm. %">
                            </div>

                            <div class="mb-3 col-md-3 md_3_2">
                                <label class="form-label">Account Balance</label>
                                <input type="text" name="account_balance"
                                    value="{{ old('account_balance', optional($legal)->account_balance) }}"
                                    class="form-control" placeholder="Enter Account Balance">
                            </div>

                            <div class="mb-3 col-md-3 md_3_2">
                                <label class="form-label">Reserve Amount</label>
                                <input type="text" name="reserve_amount"
                                    value="{{ old('reserve_amount', optional($legal)->reserve_amount) }}"
                                    class="form-control" placeholder="Enter Reserve Amount">
                            </div>

                            <div class="mb-3 col-md-3 md_3_4">
                                <label class="form-label">Credit Status</label>
                                <input type="text" name="credit_status"
                                    value="{{ old('credit_status', optional($legal)->credit_status) }}"
                                    class="form-control" placeholder="Enter Credit Status">
                            </div>

                            <div class="clear"></div>

                            {{-- Contract Details --}}
                            <div class="seprt_tab seprt_tab_full">
                                <div class="card-header">
                                    <h5>Contract Details</h5>
                                </div>
                                <div class="singl_socil">
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label">Contract Name</label>
                                        <input type="text" name="contract_name"
                                            value="{{ old('contract_name', optional($legal)->contract_name) }}"
                                            class="form-control" placeholder="Enter Contract Name">
                                    </div>

                                    <div class="mb-3 col-md-3 md_3_1">
                                        <label class="form-label">Signed On</label>
                                        <input type="date" name="contract_signed_on"
                                            value="{{ old('contract_signed_on', optional($legal)->contract_signed_on) }}"
                                            class="form-control">
                                    </div>

                                    <div class="mb-3 col-md-3 md_3_2">
                                        <label class="form-label">Expires On</label>
                                        <input type="date" name="contract_expires_on"
                                            value="{{ old('contract_expires_on', optional($legal)->contract_expires_on) }}"
                                            class="form-control">
                                    </div>

                                    <div class="mb-3 col-md-3 md_3_4">
                                        <label class="child_as child_as_top">
                                            <input type="checkbox" name="contract_is_back"
                                                class="child_as_check"
                                                {{ old('contract_is_back', optional($legal)->contract_is_back) ? 'checked' : '' }}>
                                            <div class="child_as_lbl">Is Back</div>
                                            <div class="clear"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            {{-- Work Permit Details --}}
                            <div class="seprt_tab seprt_tab_full">
                                <div class="card-header">
                                    <h5>Work Permit Details</h5>
                                </div>

                                <div class="singl_socil">
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label">Work Permit</label>
                                        <input type="text" name="work_permit"
                                            value="{{ old('work_permit', optional($legal)->work_permit) }}"
                                            class="form-control" placeholder="Enter Work Permit">
                                    </div>

                                    <div class="mb-3 col-md-3 md_3_1">
                                        <label class="form-label">Country</label>
                                        <input type="text" name="permit_country"
                                            value="{{ old('permit_country', optional($legal)->permit_country) }}"
                                            class="form-control" placeholder="Enter Country">
                                    </div>

                                    <div class="mb-3 col-md-3 md_3_2">
                                        <label class="form-label">Issued On</label>
                                        <input type="date" name="permit_issued_on"
                                            value="{{ old('permit_issued_on', optional($legal)->permit_issued_on) }}"
                                            class="form-control">
                                    </div>

                                    <div class="mb-3 col-md-3 md_3_2">
                                        <label class="form-label">Expires On</label>
                                        <input type="date" name="permit_expires_on"
                                            value="{{ old('permit_expires_on', optional($legal)->permit_expires_on) }}"
                                            class="form-control">
                                    </div>

                                    <label class="child_as">
                                        <input type="checkbox" name="stop_payments"
                                            class="child_as_check"
                                            {{ old('stop_payments', optional($legal)->stop_payments) ? 'checked' : '' }}>
                                        <div class="child_as_lbl">Stop Payments</div>
                                        <div class="clear"></div>
                                    </label>
                                     <div class="clear"></div>
                                    <div class="mb-3 input_hlaf">
                                        <label class="form-label">Stop Payments Notes</label>
                                        <textarea class="form-control" name="stop_payments_notes" rows="2">{{ old('stop_payments_notes', optional($legal)->stop_payments_notes) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                            <button type="submit" class="submit_btn flot_right">Submit</button>
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
