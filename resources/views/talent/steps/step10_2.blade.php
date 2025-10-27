<style>
.singl_img_view {
    position: relative
    transition: height 0.3s ease; 
   /* overflow: visible !important; /* allow crop box edges to show */
}

.singl_img_view.crop-active {
    z-index: 10; /* bring forward */
    overflow: visible !important;
}

.gallery_images {
    align-items: flex-start !important; /* prevent flex equal-height issue */
}
</style>

<div class="wrp_talnt_list">
    <div class="wrp_talnt_list_1">
        All (5 / 5 images)
    </div>
    <div class="wrp_talnt_list_2">
        <div class="sub_p-tablist" role="tablist" aria-label="Sample tabs">
            <button type="button" class="sub_p-tab" role="tab"
                id="sub_p-tab-1" aria-controls="sub_p-panel-1"
                aria-selected="true" tabindex="0">
            <i class="ti ti-box-padding"></i>
            Default View
            </button>
            <button type="button" class="sub_p-tab" role="tab"
                id="sub_p-tab-2" aria-controls="sub_p-panel-2"
                aria-selected="false" tabindex="-1">
            <i class="ti ti-pencil"></i>
            Edit List
            </button>
            <button type="button" class="sub_p-tab" role="tab"
                id="sub_p-tab-3" aria-controls="sub_p-panel-3"
                aria-selected="false" tabindex="-1">Group Action</button>
        </div>
        <div class="clear"></div>
    </div>
    </div>
    <div class="clear"></div>
    <div class="sub_p-panel sub_p-active" role="tabpanel"
    id="sub_p-panel-1" aria-labelledby="sub_p-tab-1">
    <div class="">
        <div class="singl_socil" bis_skin_checked="1">
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Board </label>
                <select class="form-control" >
                <option>Board</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Type of work </label>
                <select class="form-control" >
                <option>Type of work</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Name of support </label>
                <select class="form-control" >
                <option>Name of support</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Country of publication </label>
                <select class="form-control" >
                <option>Country of publication</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Photographer </label>
                <select class="form-control" >
                <option>Photographer</option>
                </select>
            </div>
        </div>
        <div class="clear"></div>
        <input type="hidden" name="t_general_id" class="general_id" value="{{ old('t_general_id', $general->id ?? '') }}">
        
        <div class="tab_img_galry">
            <div class="upload_img_galy" id="uploadArea">
                <div class="upload_img_icn">
                    <i class="ti ti-cloud-upload"></i>
                </div>
                <div class="upload_img_text">Upload/Drop Your Image</div>                
            </div>
            <span id="uploadError" class="text-danger mt-2"></span>
            <input type="file" id="imageInput" name="images[]" multiple style="display:none;">

            <div class="gallery_images d-flex flex-wrap mt-3" id="galleryContainer">
                {{-- Existing images (if any) --}}
                @foreach($images as $image)
                    <div class="singl_img_view" data-id="{{ $image->id }}">
                        <img src="{{ asset('storage/'.$image->path) }}" 
                        class="singl_img_view_img" data-rotation="{{ $image->rotation }}"
                        style="transform: rotate({{ $image->rotation }}deg); 
                        transition: transform 0.3s ease;">
                        <div class="img_filter">
                            <a href=""><i class="ti ti-edit"></i></a>
                            <a href="{{ asset('storage/'.$image->path) }}" target="_blank"><i class="ph-duotone ph-download-simple"></i></a>
                            <a href="#" class="crop-image"><i class="ph-duotone ph-crop"></i></a>
                            <a href="#" class="delete-image" data-id="{{ $image->id }}"><i class="ph-duotone ph-x-circle"></i></a>
                            <a href="#" class="rotate-left"><i class="ph-duotone ph-arrow-bend-up-left"></i></a>
                            <a href="#" class="rotate-right"><i class="ph-duotone ph-arrow-bend-up-right"></i></a>
                        </div>
                    </div>
                @endforeach
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    </div>
    <div class="sub_p-panel" role="tabpanel"
    id="sub_p-panel-2" aria-labelledby="sub_p-tab-2">
    <div class="">
        <div class="singl_socil" bis_skin_checked="1">
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Board </label>
                <select class="form-control" >
                <option>Board</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Type of work </label>
                <select class="form-control" >
                <option>Type of work</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Name of support </label>
                <select class="form-control" >
                <option>Name of support</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Country of publication </label>
                <select class="form-control" >
                <option>Country of publication</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Photographer </label>
                <select class="form-control" >
                <option>Photographer</option>
                </select>
            </div>
        </div>
        <div class="clear"></div>
        <div class="tab_img_galry ">
            <section class="im_grd-card im_grd-surface im_grd-border im_grd-grid">
                <!-- LEFT: Media / Actions / Flags -->
                <aside class="im_grd-column im_grd-surface-2 im_grd-border">
                <div class="im_grd-media">
                    <figure class="im_grd-thumb"><img alt="" src="assets/images/gal_img1.jpg" /></figure>
                </div>
                <div class="clear"></div>
                <div class="im_grd-btnrow">
                    <a class="im_grd-btn" href="#">Edit</a>
                    <a class="im_grd-btn im_grd-btn--accent" href="#">Download</a>
                    <a class="im_grd-btn" href="#">Delete</a>
                </div>
                <div class="clear"></div>
                <div class="im_grd-checks">
                    <label class="im_grd-check"><input type="checkbox" /> Profile image</label>
                    <label class="im_grd-check"><input type="checkbox" /> Digital</label>
                    <label class="im_grd-check"><input type="checkbox" /> Archive</label>
                    <label class="im_grd-check"><input type="checkbox" /> Main website image</label>
                    <label class="im_grd-check"><input type="checkbox" /> Is landscape</label>
                </div>
                </aside>
                <!-- MIDDLE: Information -->
                <section class="im_grd-column im_grd-surface-2 im_grd-border">
                <div class="im_grd-section">
                    <h3 class="im_grd-primary">INFORMATION</h3>
                    <div class="im_grd-fields">
                        <label class="im_grd-label">Support type</label>
                        <input class="im_grd-input" type="text" placeholder="e.g., Editorial" />
                        <label class="im_grd-label">Support name</label>
                        <input class="im_grd-input" type="text" placeholder="Title or name" />
                        <label class="im_grd-label">Publication date</label>
                        <input class="im_grd-input" type="date" />
                        <label class="im_grd-label">Country</label>
                        <select class="im_grd-select">
                            <option>— Select —</option>
                            <option>United States</option>
                            <option>United Kingdom</option>
                            <option>France</option>
                            <option>Italy</option>
                            <option>Japan</option>
                        </select>
                        <label class="im_grd-label">Provenance</label>
                        <input class="im_grd-input" type="text" placeholder="Source / credit" />
                        <label class="im_grd-label">Title Link</label>
                        <input class="im_grd-input" type="text" placeholder="https://…" />
                        <label class="im_grd-label">URL Link</label>
                        <input class="im_grd-input" type="url" placeholder="https://…" />
                    </div>
                </div>
                </section>
                <!-- RIGHT: Team + Type -->
                <section class="im_grd-column im_grd-surface-2 im_grd-border">
                <div class="im_grd-section">
                    <h3 class="im_grd-primary">TEAM</h3>
                    <div class="im_grd-fields im_grd-fields--stack">
                        <label class="im_grd-label">Photographer</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Stylist</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Hair</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Make-Up</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Prop/Set Design</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Manicurist</label>
                        <input class="im_grd-input" type="text" />
                    </div>
                </div>
                <div class="clear"></div>
                <br><br>
                <div class="im_grd-section im_grd-type">
                    <h3 class="im_grd-primary">TYPE</h3>
                    <div class="im_grd-fields">
                        <label class="im_grd-label">Series</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Brand</label>
                        <input class="im_grd-input" type="text" />
                    </div>
                </div>
                <div class="im_grd-submit">
                    <button class="im_grd-btn">Submit</button>
                </div>
                </section>
            </section>
            <div class="clear"></div>
            <section class="im_grd-card im_grd-surface im_grd-border im_grd-grid">
                <!-- LEFT: Media / Actions / Flags -->
                <aside class="im_grd-column im_grd-surface-2 im_grd-border">
                <div class="im_grd-media">
                    <figure class="im_grd-thumb"><img alt="" src="assets/images/gal_img1.jpg" /></figure>
                </div>
                <div class="clear"></div>
                <div class="im_grd-btnrow">
                    <a class="im_grd-btn" href="#">Edit</a>
                    <a class="im_grd-btn im_grd-btn--accent" href="#">Download</a>
                    <a class="im_grd-btn" href="#">Delete</a>
                </div>
                <div class="clear"></div>
                <div class="im_grd-checks">
                    <label class="im_grd-check"><input type="checkbox" /> Profile image</label>
                    <label class="im_grd-check"><input type="checkbox" /> Digital</label>
                    <label class="im_grd-check"><input type="checkbox" /> Archive</label>
                    <label class="im_grd-check"><input type="checkbox" /> Main website image</label>
                    <label class="im_grd-check"><input type="checkbox" /> Is landscape</label>
                </div>
                </aside>
                <!-- MIDDLE: Information -->
                <section class="im_grd-column im_grd-surface-2 im_grd-border">
                <div class="im_grd-section">
                    <h3 class="im_grd-primary">INFORMATION</h3>
                    <div class="im_grd-fields">
                        <label class="im_grd-label">Support type</label>
                        <input class="im_grd-input" type="text" placeholder="e.g., Editorial" />
                        <label class="im_grd-label">Support name</label>
                        <input class="im_grd-input" type="text" placeholder="Title or name" />
                        <label class="im_grd-label">Publication date</label>
                        <input class="im_grd-input" type="date" />
                        <label class="im_grd-label">Country</label>
                        <select class="im_grd-select">
                            <option>— Select —</option>
                            <option>United States</option>
                            <option>United Kingdom</option>
                            <option>France</option>
                            <option>Italy</option>
                            <option>Japan</option>
                        </select>
                        <label class="im_grd-label">Provenance</label>
                        <input class="im_grd-input" type="text" placeholder="Source / credit" />
                        <label class="im_grd-label">Title Link</label>
                        <input class="im_grd-input" type="text" placeholder="https://…" />
                        <label class="im_grd-label">URL Link</label>
                        <input class="im_grd-input" type="url" placeholder="https://…" />
                    </div>
                </div>
                </section>
                <!-- RIGHT: Team + Type -->
                <section class="im_grd-column im_grd-surface-2 im_grd-border">
                <div class="im_grd-section">
                    <h3 class="im_grd-primary">TEAM</h3>
                    <div class="im_grd-fields im_grd-fields--stack">
                        <label class="im_grd-label">Photographer</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Stylist</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Hair</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Make-Up</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Prop/Set Design</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Manicurist</label>
                        <input class="im_grd-input" type="text" />
                    </div>
                </div>
                <div class="clear"></div>
                <br><br>
                <div class="im_grd-section im_grd-type">
                    <h3 class="im_grd-primary">TYPE</h3>
                    <div class="im_grd-fields">
                        <label class="im_grd-label">Series</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Brand</label>
                        <input class="im_grd-input" type="text" />
                    </div>
                </div>
                <div class="im_grd-submit">
                    <button class="im_grd-btn">Submit</button>
                </div>
                </section>
            </section>
            <div class="clear"></div>
            <section class="im_grd-card im_grd-surface im_grd-border im_grd-grid">
                <!-- LEFT: Media / Actions / Flags -->
                <aside class="im_grd-column im_grd-surface-2 im_grd-border">
                <div class="im_grd-media">
                    <figure class="im_grd-thumb"><img alt="" src="assets/images/gal_img1.jpg" /></figure>
                </div>
                <div class="clear"></div>
                <div class="im_grd-btnrow">
                    <a class="im_grd-btn" href="#">Edit</a>
                    <a class="im_grd-btn im_grd-btn--accent" href="#">Download</a>
                    <a class="im_grd-btn" href="#">Delete</a>
                </div>
                <div class="clear"></div>
                <div class="im_grd-checks">
                    <label class="im_grd-check"><input type="checkbox" /> Profile image</label>
                    <label class="im_grd-check"><input type="checkbox" /> Digital</label>
                    <label class="im_grd-check"><input type="checkbox" /> Archive</label>
                    <label class="im_grd-check"><input type="checkbox" /> Main website image</label>
                    <label class="im_grd-check"><input type="checkbox" /> Is landscape</label>
                </div>
                </aside>
                <!-- MIDDLE: Information -->
                <section class="im_grd-column im_grd-surface-2 im_grd-border">
                <div class="im_grd-section">
                    <h3 class="im_grd-primary">INFORMATION</h3>
                    <div class="im_grd-fields">
                        <label class="im_grd-label">Support type</label>
                        <input class="im_grd-input" type="text" placeholder="e.g., Editorial" />
                        <label class="im_grd-label">Support name</label>
                        <input class="im_grd-input" type="text" placeholder="Title or name" />
                        <label class="im_grd-label">Publication date</label>
                        <input class="im_grd-input" type="date" />
                        <label class="im_grd-label">Country</label>
                        <select class="im_grd-select">
                            <option>— Select —</option>
                            <option>United States</option>
                            <option>United Kingdom</option>
                            <option>France</option>
                            <option>Italy</option>
                            <option>Japan</option>
                        </select>
                        <label class="im_grd-label">Provenance</label>
                        <input class="im_grd-input" type="text" placeholder="Source / credit" />
                        <label class="im_grd-label">Title Link</label>
                        <input class="im_grd-input" type="text" placeholder="https://…" />
                        <label class="im_grd-label">URL Link</label>
                        <input class="im_grd-input" type="url" placeholder="https://…" />
                    </div>
                </div>
                </section>
                <!-- RIGHT: Team + Type -->
                <section class="im_grd-column im_grd-surface-2 im_grd-border">
                <div class="im_grd-section">
                    <h3 class="im_grd-primary">TEAM</h3>
                    <div class="im_grd-fields im_grd-fields--stack">
                        <label class="im_grd-label">Photographer</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Stylist</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Hair</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Make-Up</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Prop/Set Design</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Manicurist</label>
                        <input class="im_grd-input" type="text" />
                    </div>
                </div>
                <div class="clear"></div>
                <br><br>
                <div class="im_grd-section im_grd-type">
                    <h3 class="im_grd-primary">TYPE</h3>
                    <div class="im_grd-fields">
                        <label class="im_grd-label">Series</label>
                        <input class="im_grd-input" type="text" />
                        <label class="im_grd-label">Brand</label>
                        <input class="im_grd-input" type="text" />
                    </div>
                </div>
                <div class="im_grd-submit">
                    <button class="im_grd-btn">Submit</button>
                </div>
                </section>
            </section>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    </div>
    <div class="sub_p-panel" role="tabpanel"
    id="sub_p-panel-3" aria-labelledby="sub_p-tab-3">
    <div class="603">
        <div class="singl_socil" bis_skin_checked="1">
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Board </label>
                <select class="form-control" >
                <option>Board</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Type of work </label>
                <select class="form-control" >
                <option>Type of work</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Name of support </label>
                <select class="form-control" >
                <option>Name of support</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Country of publication </label>
                <select class="form-control" >
                <option>Country of publication</option>
                </select>
            </div>
            <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
                <label class="form-label">Photographer </label>
                <select class="form-control" >
                <option>Photographer</option>
                </select>
            </div>
        </div>
        <div class="clear"></div>
        <div class="tbl_t-page">
            <div class="tbl_t-card">
                <div class="tbl_t-header">
                <h1>Group Action</h1>
                </div>
                <div class="tbl_t-content">
                <!-- INFORMATION -->
                <section class="tbl_t-section">
                    <div class="tbl_t-sectionHead">Information</div>
                    <div class="tbl_t-sectionBody">
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="supportType">Support type</label>
                            <input class="tbl_t-input" id="supportType" type="text" placeholder="Enter support type" />
                        </div>
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="supportName">Support name</label>
                            <input class="tbl_t-input" id="supportName" type="text" placeholder="Enter support name" />
                        </div>
                        <div class="tbl_t-field">
                            <label class="tbl_t-label">Publication date</label>
                            <div class="tbl_t-dateShim" aria-hidden="true" title="(Read-only preview of date field)"></div>
                        </div>
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="country">Country</label>
                            <select class="tbl_t-select" id="country">
                            <option>— Select —</option>
                            <option>United States</option>
                            <option>United Kingdom</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Italy</option>
                            <option>Spain</option>
                            </select>
                        </div>
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="provenance">Provenance</label>
                            <input class="tbl_t-input" id="provenance" type="text" placeholder="Enter provenance" />
                        </div>
                    </div>
                </section>
                <!-- TEAM -->
                <section class="tbl_t-section">
                    <div class="tbl_t-sectionHead">Team</div>
                    <div class="tbl_t-sectionBody tbl_t-twoCol">
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="photographer">Photographer</label>
                            <input class="tbl_t-input" id="photographer" type="text" />
                        </div>
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="stylist">Stylist</label>
                            <input class="tbl_t-input" id="stylist" type="text" />
                        </div>
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="hair">Hair</label>
                            <input class="tbl_t-input" id="hair" type="text" />
                        </div>
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="makeup">Make-Up</label>
                            <input class="tbl_t-input" id="makeup" type="text" />
                        </div>
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="prop">Prop/Set Design</label>
                            <input class="tbl_t-input" id="prop" type="text" />
                        </div>
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="manicurist">Manicurist</label>
                            <input class="tbl_t-input" id="manicurist" type="text" />
                        </div>
                    </div>
                </section>
                <!-- TYPE -->
                <section class="tbl_t-section">
                    <div class="tbl_t-sectionHead">Type</div>
                    <div class="tbl_t-sectionBody">
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="series">Series</label>
                            <input class="tbl_t-input" id="series" type="text" />
                        </div>
                        <div class="tbl_t-field">
                            <label class="tbl_t-label" for="brand">Brand</label>
                            <input class="tbl_t-input" id="brand" type="text" />
                        </div>
                        <div class="tbl_t-row">
                            <label class="tbl_t-checkRow">
                            <input class="tbl_t-checkbox" type="checkbox" id="digital" />
                            <span>Digital</span>
                            </label>
                            <label class="tbl_t-checkRow">
                            <input class="tbl_t-checkbox" type="checkbox" id="isLandscape" />
                            <span>Is landscape</span>
                            </label>
                        </div>
                    </div>
                </section>
                </div>
                <!-- Footer actions -->
                <div class="tbl_t-footer">
                <button class="tbl_t-btn tbl_t-btnGhost" type="button">Cancel</button>
                <button class="tbl_t-btn" type="button">Select All</button>
                <button class="tbl_t-btn tbl_t-btnAccent" type="button" aria-label="Download">
                <i class="ti ti-download"></i>
                </button>
                <button class="tbl_t-btn tbl_t-btnDanger" type="button" aria-label="Delete">
                <i class="ph-duotone ph-x-circle"></i>
                </button>
                <button class="tbl_t-btn tbl_t-btnOk" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>