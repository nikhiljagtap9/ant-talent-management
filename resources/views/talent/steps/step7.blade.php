 <div class="">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <h5>Usage</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="wrap_form" id="usageForm" enctype="multipart/form-data">
                    @csrf

                    {{-- Hidden fields --}}
                    <input type="hidden" name="t_general_id" class="general_id" value="{{ old('t_general_id', $general->id ?? '') }}">
                    <input type="hidden" name="id" id="usage_id" value="{{ old('id', optional($usage)->id) }}">
                    <div class="mb-3 col-md-3">
                        <label class="form-label">Event Type</label>
                        <input type="text" name="event_type" 
                        value="{{ old('event_type',optional($usage)->event_type)}}"
                        class="form-control"  placeholder="Enter Event Type">
                    </div>
                    <div class="mb-3 col-md-3 md_3_1">
                        <label class="form-label">Usage Type</label>
                        <input type="text" name="usage_type" 
                        value="{{old('usage_type',optional($usage)->usage_type)}}"
                        class="form-control"  placeholder="Enter Usage Type">
                    </div>
                    <div class="mb-3 col-md-3 md_3_2">
                        <label class="form-label">Client</label>
                        <input type="text" name="client" 
                        value="{{old('client',optional($usage)->client)}}"
                        class="form-control"  placeholder="Enter Client">
                    </div>
                    <div class="mb-3 col-md-3 md_3_4">
                        <label class="form-label">Product</label>
                        <input type="text" name="product" 
                        value="{{old('product',optional($usage)->product)}}"
                        class="form-control"  placeholder="Enter Product">
                    </div>
                    <div class="clear"></div>
                    <div class="mb-3 col-md-3">
                        <label class="form-label">Start Date</label>
                        <input type="date" name="start_date" 
                        value="{{old('start_date',optional($usage)->start_date)}}"
                        class="form-control"  placeholder="Enter Event Type">
                    </div>
                    <div class="mb-3 col-md-3 md_3_1">
                        <label class="form-label">End Date</label>
                        <input type="date" name="end_date" 
                        value="{{old('end_date',optional($usage)->end_date)}}"
                        class="form-control"  placeholder="Enter Event Type">
                    </div>
                    <div class="mb-3 col-md-3 md_3_2">
                        <label class="form-label">Booker</label>
                        <input type="text" name="booker"
                        value="{{old('booker',optional($usage)->booker)}}"
                        class="form-control"  placeholder="Enter Booker">
                    </div>
                    <div class="mb-3 col-md-3 md_3_2">
                        <label class="form-label">Exclusivity</label>
                        <select class="form-control" name="exclusivity">
                            <option value="">Select Exclusivity</option>
                            <option value="Checked" {{ optional($usage)->exclusivity == 'Checked' ? 'selected' : '' }}>Checked</option>
                            <option value="Unchecked" {{ optional($usage)->exclusivity == 'Unchecked' ? 'selected' : ''}}>Unchecked</option>
                        </select>
                    </div>
                    <div class="clear"></div>
                    <div class="mb-3 col-md-3 ">
                        <label class="form-label">Board</label>
                        <input type="text" name="board" 
                        value="{{old('board',optional($usage)->board)}}"
                        class="form-control"  placeholder="Enter Board">
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