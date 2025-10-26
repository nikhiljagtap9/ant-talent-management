<div class="">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Documents</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form id="documentForm" class="wrap_form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="t_general_id" value="{{ $general->id ?? '' }}">
                            <input type="hidden" name="id" id="document_id" value="{{ old('id', optional($document)->id) }}">

                            {{-- Legal names --}}
                            {{-- Passport Details --}}
                            <div class="wrp_singl_passp">
                                <div class="pas_titl">Passport Detail</div>
                                <div class="clear"></div>
                                <div class="mb-3 col-md-3 pas_5">
                                    <label class="form-label">Passport Number</label>
                                    <input type="text" name="passport_number" 
                                    value="{{ $document->passport_number ?? '' }}"
                                    class="form-control" placeholder="Enter Passport Number">
                                </div>
                                <div class="mb-3 col-md-3 pas_5">
                                    <label class="form-label">Issue Date</label>
                                    <input type="date" name="passport_issue_date" 
                                    value="{{ $document->passport_issue_date ?? '' }}"
                                    class="form-control">
                                </div>
                                <div class="mb-3 col-md-3 pas_5">
                                    <label class="form-label">Expiry Date</label>
                                    <input type="date" name="passport_expiry_date" 
                                    value="{{ $document->passport_expiry_date ?? '' }}"
                                    class="form-control">
                                </div>
                                <div class="mb-3 col-md-3 pas_5">
                                    <label class="form-label">Country</label>
                                    <input type="text" name="passport_country" 
                                    value="{{ $document->passport_country ?? '' }}"
                                    class="form-control" placeholder="Enter Country">
                                </div>
                                <div class="mb-3 col-md-3 pas_5">
                                    <label class="form-label">Upload Document</label>
                                    <input type="file" name="passport_file" class="form-control logo_upload">
                                    @if(!empty($document->passport_file))
                                            <div class="logo_prevw_1">
                                                <div class="cros_upload">
                                                <i class="ti ti-x"></i>
                                            </div>
                                            <a class="prevw_img" target="_blank" href="{{ asset('storage/'.$document->passport_file) }}">
                                                <img src="{{ asset('storage/'.$document->passport_file) }}" class="logo_prevw_1_img">
                                            </a>
                                        </div>
                                    @endif
                                    <div class="clear"></div>
                                </div>
                            </div>

                            {{-- Visa Details --}}
                            <div class="wrp_singl_passp">
                                <div class="pas_titl">Visa Detail</div>
                                <div class="clear"></div>
                                <div class="mb-3 col-md-3 pas_5">
                                    <label class="form-label">Visa Number</label>
                                    <input type="text" name="visa_number" 
                                    value="{{ $document->visa_number ?? '' }}"
                                    class="form-control" placeholder="Enter Visa Number">
                                </div>
                                <div class="mb-3 col-md-3 pas_5">
                                    <label class="form-label">Issue Date</label>
                                    <input type="date" name="visa_issue_date" 
                                    value="{{ $document->visa_issue_date ?? '' }}"
                                    class="form-control">
                                </div>
                                <div class="mb-3 col-md-3 pas_5">
                                    <label class="form-label">Expiry Date</label>
                                    <input type="date" name="visa_expiry_date" 
                                    value="{{ $document->visa_expiry_date ?? '' }}"
                                    class="form-control">
                                </div>
                                <div class="mb-3 col-md-3 pas_5">
                                    <label class="form-label">Country</label>
                                    <input type="text" name="visa_country" 
                                    value="{{ $document->visa_country ?? '' }}"
                                    class="form-control" placeholder="Enter Country">
                                </div>
                                <div class="mb-3 col-md-3 pas_5">
                                    <label class="form-label">Upload Document</label>
                                    <input type="file" name="visa_file" class="form-control logo_upload">
                                    @if(!empty($document->visa_file))
                                            <div class="logo_prevw_1">
                                                <div class="cros_upload">
                                                <i class="ti ti-x"></i>
                                            </div>
                                            <a class="prevw_img" target="_blank" href="{{ asset('storage/'.$document->visa_file) }}">
                                                <img src="{{ asset('storage/'.$document->visa_file) }}" class="logo_prevw_1_img">
                                            </a>
                                        </div>
                                    @endif
                                    <div class="clear"></div>
                                </div>
                            </div>

                            {{-- Contract --}}
                            <div class="wrp_singl_passp">
                                <div class="pas_titl">Contract</div>
                                <div class="clear"></div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Initial Date</label>
                                    <input type="date" name="contract_initial_date" 
                                    value="{{ $document->contract_initial_date ?? '' }}"
                                    class="form-control">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Expiry Date</label>
                                    <input type="date" name="contract_expiry_date" 
                                    value="{{ $document->contract_expiry_date ?? '' }}"
                                    class="form-control">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Upload Document</label>
                                    <input type="file" name="contract_file" 
                                    value="{{ $document->contract_file ?? '' }}"
                                    class="form-control logo_upload">
                                    @if(!empty($document->contract_file))
                                            <div class="logo_prevw_1">
                                                <div class="cros_upload">
                                                <i class="ti ti-x"></i>
                                            </div>
                                            <a class="prevw_img" target="_blank" href="{{ asset('storage/'.$document->contract_file) }}">
                                                <img src="{{ asset('storage/'.$document->contract_file) }}" class="logo_prevw_1_img">
                                            </a>
                                        </div>
                                    @endif
                                    <div class="clear"></div>
                                </div>
                            </div>

                            {{-- License --}}
                            <div class="wrp_singl_passp">
                                <div class="pas_titl">License</div>
                                <div class="clear"></div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Expiry Date</label>
                                    <input type="date" name="license_expiry_date" 
                                    value="{{ $document->license_expiry_date ?? '' }}"
                                    class="form-control">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Upload Document</label>
                                    <input type="file" name="license_file" 
                                    class="form-control logo_upload">
                                    @if(!empty($document->license_file))
                                            <div class="logo_prevw_1">
                                                <div class="cros_upload">
                                                <i class="ti ti-x"></i>
                                            </div>
                                            <a class="prevw_img" target="_blank" href="{{ asset('storage/'.$document->license_file) }}">
                                                <img src="{{ asset('storage/'.$document->license_file) }}" class="logo_prevw_1_img">
                                            </a>
                                        </div>
                                    @endif
                                    <div class="clear"></div>
                                </div>
                            </div>

                            {{-- Photos --}}
                            <div class="wrp_singl_passp">
                                <div class="pas_titl">Photos</div>
                                <div class="clear"></div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Upload Photos</label>
                                    <input type="file" name="photo_file" class="form-control">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Upload Document</label>
                                    <div class="clear"></div>
                                    <input type="file" class="form-control logo_upload"  placeholder="Enter Name">
                                    <div class="logo_prevw_1">
                                        <div class="cros_upload">
                                        <i class="ti ti-x"></i>
                                        </div>
                                        <a class="prevw_img" data-bs-toggle="modal" data-bs-target="#login-modal">
                                        <img src="assets/images/small_doc.jpg" class="logo_prevw_1_img" >
                                        </a>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>

                            {{-- Other --}}
                            <div class="wrp_singl_passp">
                                <div class="pas_titl">Other</div>
                                <div class="clear"></div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Enter Comment</label>
                                    <input type="text" name="other_comment" 
                                    value= "{{ $document->other_comment ?? ''}}"
                                    class="form-control" placeholder="Enter Comment">
                                </div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Upload Document</label>
                                    <input type="file" name="other_file" class="form-control logo_upload">
                                    @if(!empty($document->other_file))
                                            <div class="logo_prevw_1">
                                                <div class="cros_upload">
                                                <i class="ti ti-x"></i>
                                            </div>
                                            <a class="prevw_img" target="_blank" href="{{ asset('storage/'.$document->other_file) }}">
                                                <img src="{{ asset('storage/'.$document->other_file) }}" class="logo_prevw_1_img">
                                            </a>
                                        </div>
                                    @endif
                                    <div class="clear"></div>
                                </div>
                            </div>

                            <button type="submit" class="submit_btn flot_right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

