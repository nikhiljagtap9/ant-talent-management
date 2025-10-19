<div class="">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <h5>Contacts</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="wrap_form" id="contactForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="t_general_id" class="general_id"  value="{{ old('t_general_id', $general->id ?? '') }}">
                    <div class="seprt_tab seprt_tab_full" id="contact_wrapper">
                        <div class="clear"></div>
                        <br>
                        @forelse($contacts as $index => $contact)
                            <div class="singl_socil">
                                <input type="hidden" name="contact[{{ $index }}][id]" value="{{ $contact->id }}">
                                <div class="mb-3 col-md-2 smal_5">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="contact[{{ $index }}][name]" class="form-control" value="{{ $contact->name }}" placeholder="Enter Name">
                                </div>
                                <div class="mb-3 col-md-2 smal_5">
                                    <label class="form-label">Relationship</label>
                                    <input type="text" name="contact[{{ $index }}][relationship]" class="form-control" value="{{ $contact->relationship }}" placeholder="Enter Relationship">
                                </div>
                                <div class="mb-3 col-md-2 smal_5">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="contact[{{ $index }}][email]" class="form-control" value="{{ $contact->email }}" placeholder="Enter Email">
                                </div>
                                <div class="mb-3 col-md-2 smal_5">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="contact[{{ $index }}][phone]" class="form-control" value="{{ $contact->phone }}" placeholder="Enter Phone">
                                </div>
                                <div class="mb-3 col-md-2 smal_5">
                                    <label class="form-label">Mobile</label>
                                    <input type="text" name="contact[{{ $index }}][mobile]" class="form-control" value="{{ $contact->mobile }}" placeholder="Enter Mobile">
                                </div>
                                <!-- <button type="button" class="btn btn-danger btn-sm remove_contact" style="margin-top:30px;">Remove</button> -->
                            </div>
                        @empty    
                            <div class="singl_socil">
                                <input type="hidden" name="contact[0][id]" value="{{ $contact->id ?? '' }}">
                                <div class="mb-3 col-md-2 smal_5">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="contact[0][name]" class="form-control"  placeholder="Enter Name">
                                </div>
                                <div class="mb-3 col-md-2 smal_5">
                                    <label class="form-label">Relationship</label>
                                    <input type="text" name="contact[0][relationship]" class="form-control"  placeholder="Enter Relationship">
                                </div>
                                <div class="mb-3 col-md-2 smal_5">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="contact[0][email]" class="form-control"  placeholder="Enter Email">
                                </div>
                                <div class="mb-3 col-md-2 smal_5">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="contact[0][phone]" class="form-control"  placeholder="Enter Phone">
                                </div>
                                <div class="mb-3 col-md-2 smal_5">
                                    <label class="form-label">Mobile</label>
                                    <input type="text" name="contact[0][mobile]" class="form-control"  placeholder="Enter Mobile">
                                </div>
                            </div>
                        @endforelse
                        <div class="clear"></div>
                        <button type="button" id="add_contact" class="ad_more_btn">Add More</button>
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
                        <h5>Other Contacts</h5>
                    </div>
                    <div class="pro-scroll" style="height: 280px; position: relative">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover my_tble" id="contactTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Relationship </th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Mobile</th>
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