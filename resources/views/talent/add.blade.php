@extends('main')

@section('content')
<!-- [ Main Content ] start -->
<div class="pc-container">
   <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
         <div class="page-block">
            <div class="row align-items-center g-0">
               <div class="col-sm-auto">
                  <ul class="breadcrumb breadcrumb_new">
                     <li class="breadcrumb-item"><a href="javascript: void(0)">Home</a></li>
                     <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                     <li class="breadcrumb-item" aria-current="page">Add Talent</li>
                  </ul>
                  <div class="clear"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-body">
                  <div id="basicwizard" class="form-wizard row justify-content-center add_compny_tab">
                     <ul class="nav nav-pills justify-content-center course-wizard talent_tab">
                        <li class="nav-item" data-target-form="#contactDetailForm">
                           <a href="#general_tab" data-bs-toggle="tab" data-toggle="tab" class="nav-link active">
                              <div class="course-wizard-num">
                                 <i class="ph-duotone ph-newspaper-clipping" ></i>
                              </div>
                              <span class="d-none d-sm-inline">General</span>
                           </a>
                        </li>
                        <!-- end nav item -->
                        <li class="nav-item" data-target-form="#billing_panel">
                           <a href="#billing_panel" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                              <div class="course-wizard-num">
                                 <i class="ph-duotone ph-credit-card" ></i>
                              </div>
                              <span class="d-none d-sm-inline">Legal</span>
                           </a>
                        </li>
                        <!-- end nav item -->
                        <li class="nav-item" data-target-form="#educationDetailForm">
                           <a href="#contact_tab" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                              <div class="course-wizard-num">
                                 <i class="ph-duotone ph-identification-card" ></i>
                              </div>
                              <span class="d-none d-sm-inline">CONTACTS</span>
                           </a>
                        </li>
                        <!-- end nav item -->
                        <li class="nav-item">
                           <a href="#agencies_tab" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                              <div class="course-wizard-num">
                                 <i class="ti ti-building-warehouse" ></i>
                              </div>
                              <span class="d-none d-sm-inline">Agencies</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#stats_tab" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                              <div class="course-wizard-num">
                                 <i class="ti ti-man" ></i>
                              </div>
                              <span class="d-none d-sm-inline">Stats</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#document_tab" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                              <div class="course-wizard-num">
                                 <i class="ph-duotone ph-upload" ></i>
                              </div>
                              <span class="d-none d-sm-inline">Documents</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#usage_tab" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                              <div class="course-wizard-num">
                                 <i class="ti ti-package" ></i>
                              </div>
                              <span class="d-none d-sm-inline">Usage</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#appointment_tab" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                              <div class="course-wizard-num">
                                 <i class="ph-duotone ph-calendar-check" ></i>
                              </div>
                              <span class="d-none d-sm-inline">Appointments</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="#notes_tab" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                              <div class="course-wizard-num">
                                 <i class="ph-duotone ph-note-pencil" ></i>
                              </div>
                              <span class="d-none d-sm-inline">Notes</span>
                           </a>
                        </li>
                        <!-- end nav item -->
                        <div class="clear"></div>
                        <div class="note_wrp_a">
                           <a href="#web_mang" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn">
                              <div class="course-wizard-num">
                                 <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#ffffff"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-camera-cog">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 20h-7a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v3" />
                                    <path d="M14.973 13.406a3 3 0 1 0 -2.973 2.594" />
                                    <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M19.001 15.5v1.5" />
                                    <path d="M19.001 21v1.5" />
                                    <path d="M22.032 17.25l-1.299 .75" />
                                    <path d="M17.27 20l-1.3 .75" />
                                    <path d="M15.97 17.25l1.3 .75" />
                                    <path d="M20.733 20l1.3 .75" />
                                 </svg>
                              </div>
                              <span class="d-none d-sm-inline">
                                 <!-- Image & Website Management -->
                                 Web & Media Manager
                              </span>
                           </a>
                        </div>
                     </ul>
                     <div class="tab-content talent_tab_panel">
                         <div id="formErrors" class="alert alert-danger d-none"></div>
                        <div class="tab-pane show active" id="general_tab">
                           @include('talent.steps.step1')
                        </div>   
                        <div class="tab-pane" id="billing_panel">
                           @include('talent.steps.step2')
                        </div>
                        <div class="tab-pane" id="contact_tab">
                           @include('talent.steps.step3')
                        </div>
                        <div class="tab-pane" id="agencies_tab">
                           @include('talent.steps.step4')
                        </div>
                        <div class="tab-pane" id="stats_tab">
                           @include('talent.steps.step5')
                        </div>
                        <div class="tab-pane" id="document_tab">
                           @include('talent.steps.step6')
                        </div>
                        <div class="tab-pane " id="usage_tab">
                           @include('talent.steps.step7')
                        </div>
                        
                        <div class="tab-pane" id="appointment_tab" >
                           @include('talent.steps.step8')
                        </div>
                        <div class="tab-pane" id="notes_tab" >
                           @include('talent.steps.step9')
                        </div>
                        <div class="tab-pane  " id="web_mang" >
                           @include('talent.steps.step10')
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- [ Main Content ] end -->
   </div>
</div>

<div class="modal fade login-modal upload_doc" id="login-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content card mb-0 user-card">
         <div class="modal-body">
            <div class="d-flex mb-4">
               <div class="flex-grow-1 me-3">
                  <h4 class="f-w-500 mb-1">Uploaded Document</h4>
               </div>
               <div class="flex-shrink-0"><a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal"><i class="ti ti-x f-20"></i></a></div>
            </div>
            <div class="">
               <img src="assets/images/SAMPLE_PASSPORT_FAKE.jpg" class="dum_pass" >
            </div>
            <div class="clear"></div>
            <div class="ad_comns_vtn">
               <a class="save_btn" href="">SAVE</a>
               <a class="delete_btn" href="">DELETE</a>
            </div>
            <div class="clear"></div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="modal fade add_new_cat upload_doc" id="add_new_cat" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content card mb-0 user-card">
         <div class="modal-body">
            <div class="d-flex mb-4">
               <div class="flex-grow-1 me-3">
                  <h4 class="f-w-500 mb-1">Add New Category</h4>
               </div>
               <div class="flex-shrink-0"><a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal"><i class="ti ti-x f-20"></i></a></div>
            </div>
            <div class="col-md-12" bis_skin_checked="1">
               <form class="wrap_form">
                  <div class="mb-6 col-md-6 " bis_skin_checked="1">
                     <label class="form-label">Enter New Category Name</label>
                     <input type="text" class="form-control" placeholder="Enter Name" >
                  </div>
                  <div class="clear" bis_skin_checked="1"></div>
                  <button type="submit" class="submit_btn flot_right" >Submit</button>
               </form>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection
@section('scripts')
   <script>
      const mainCheckboxes = document.querySelectorAll(".ckb-main");
      const divisions = document.querySelectorAll(".ckb-divisions");
      
      mainCheckboxes.forEach(cb => {
      cb.addEventListener("change", () => {
         // hide all divisions
         divisions.forEach(div => div.classList.add("ckb-hidden"));
      
         // show only selected
         if (cb.checked) {
            if (cb.value === "models") document.querySelector(".ckb-models").classList.remove("ckb-hidden");
            if (cb.value === "talent") document.querySelector(".ckb-talent").classList.remove("ckb-hidden");
            if (cb.value === "influencer") document.querySelector(".ckb-influencer").classList.remove("ckb-hidden");
            if (cb.value === "sports") document.querySelector(".ckb-sports").classList.remove("ckb-hidden");
            if (cb.value === "creatives") document.querySelector(".ckb-creatives").classList.remove("ckb-hidden");
         }
      });
      });
   </script>
   <script>
      // Simple JS to switch tabs
      document.querySelectorAll('.dcm-nav-link').forEach(btn => {
      btn.addEventListener('click', () => {
         // deactivate all
         document.querySelectorAll('.dcm-nav-link').forEach(el => el.classList.remove('active'));
         document.querySelectorAll('.dcm-tab-pane').forEach(el => el.classList.remove('active', 'show'));
      
         // activate clicked
         btn.classList.add('active');
         const target = document.querySelector(btn.dataset.target);
         if (target) target.classList.add('active', 'show');
      });
      });
   </script>
   <script>
      (function () {
      const tabs = Array.from(document.querySelectorAll('.sub_p-tab'));
      const panels = Array.from(document.querySelectorAll('.sub_p-panel'));
      
      function activate(index) {
         tabs.forEach((t, i) => {
            const selected = i === index;
            t.setAttribute('aria-selected', String(selected));
            t.setAttribute('tabindex', selected ? '0' : '-1');
      
            const panelId = t.getAttribute('aria-controls');
            const panel = document.getElementById(panelId);
            if (!panel) return;
      
            panel.classList.toggle('sub_p-active', selected);
         });
         tabs[index].focus();
      }
      
      tabs.forEach((tab, i) => {
         tab.addEventListener('click', () => activate(i));
         tab.addEventListener('keydown', (e) => {
            let j = i;
            if (e.key === 'ArrowRight') j = (i + 1) % tabs.length;
            if (e.key === 'ArrowLeft')  j = (i - 1 + tabs.length) % tabs.length;
            if (e.key === 'Home') j = 0;
            if (e.key === 'End')  j = tabs.length - 1;
            if (j !== i) activate(j);
         });
      });
      })();
   </script>
   
   <!-- step 1-->
   <script>        
      let addressIndex = 1;
      let socialIndex = 1;

      // Add more addresses
      $('#add_address').click(function(e){
         e.preventDefault();
         let html = `<div class="singl_socil singl_socil_2 address_block">
                           <input type="hidden" name="addresses[${addressIndex}][id]" value="">
                            <div class="mb-3 input_hlaf">
                                <label class="form-label">Address 1</label>
                                <textarea name="addresses[${addressIndex}][address1]" class="form-control" rows="2" ></textarea>
                            </div>
                            <div class="mb-3 input_hlaf input_hlaf_right">
                                <label class="form-label">Address 2</label>
                                <textarea name="addresses[${addressIndex}][address2]" class="form-control" rows="2" ></textarea>
                            </div>
                            <div class="clear"></div>
                            <div class="mb-3 col-md-3 ">
                                <label class="form-label">City</label>
                                <input name="addresses[${addressIndex}][city]" type="text" class="form-control"  placeholder="Enter City">
                            </div>
                            <div class="mb-3 col-md-3 md_3_1">
                                <label class="form-label">State</label>
                                <input name="addresses[${addressIndex}][state]" type="text" class="form-control"  placeholder="Enter State">
                            </div>
                            <div class="mb-3 col-md-3 md_3_2">
                                <label class="form-label">ZIP</label>
                                <input name="addresses[${addressIndex}][zip]" type="text" class="form-control"  placeholder="Enter ZIP">
                            </div>
                            <div class="mb-3 col-md-3 md_3_4">
                                <label class="form-label">Country </label>
                                <input name="addresses[${addressIndex}][country]" type="text" class="form-control"  placeholder="Enter Country">
                            </div>
                             <button type="button" class="btn btn-sm btn-danger remove_address">Remove</button>
                        </div>`;
         $('#addresses_wrapper').append(html);
         addressIndex++;
      });

      // Remove address block
      $(document).on('click', '.remove_address', function(){
         $(this).closest('.address_block').remove();
      });

      // Add more social media
      $('#add_social').click(function(e){
         e.preventDefault();
         let html = `<div class="singl_socil social_block">
                           <input type="hidden" name="social_media[${socialIndex}][id]" value="">
                            <div class="mb-3 col-md-3 ">
                                <label class="form-label">Media</label>
                                <input type="text" name="social_media[${socialIndex}][media]" class="form-control"  placeholder="Enter Media Name">
                            </div>
                            <div class="mb-3 col-md-3 md_3_1">
                                <label class="form-label">URL/Name</label>
                                <input type="text" name="social_media[${socialIndex}][url]" class="form-control"  placeholder="Enter State">
                            </div>
                            <div class="mb-3 col-md-3 md_3_2">
                                <label class="form-label">Number</label>
                                <input type="text" name="social_media[${socialIndex}][number]" class="form-control"  placeholder="Enter Number">
                            </div>
                            <div class="mb-3 col-md-3 md_3_4">
                                <label class="form-label">Date Updated </label>
                                <input type="text" name="social_media[${socialIndex}][date_updated]" class="form-control"  placeholder="Enter Country">
                            </div>
                            <button type="button" class="btn btn-sm btn-danger remove_social">Remove</button>
                        </div>`;
         $('#social_wrapper').append(html);
         socialIndex++;
      });

      // Remove social block
      $(document).on('click', '.remove_social', function(){
         $(this).closest('.social_block').remove();
      });
      
      $(document).on('submit', '#general', function(e) {
         e.preventDefault();

         let form = $(this);
         // Collect form data
         let formData = new FormData(this);

         // Clear previous errors
         $('#formErrors').html('').addClass('d-none');

         $.ajax({
               url: "{{ route('talent.general.store') }}",
               method: "POST",
               data: formData,
               contentType: false,  // Important for FormData
               processData: false,  // Prevent jQuery from converting data to string
               success: function(response) {
                  if (response.status) {
                     $('.general_id').val(response.id);
                     $('#talent_id').val(response.id);
                     alert(response.message);
                     // Move to next tab automatically
                     $('a[href="#billing_panel"]').tab('show');
                  } else {
                     let errors = response.errors;
                     let errorList = '<ul>';
                     $.each(errors, function(key, val) {
                        errorList += '<li>' + val[0] + '</li>';
                     });
                     errorList += '</ul>';
                     $('#formErrors').html(errorList).removeClass('d-none');

                     // Scroll to top of form
                     $('html, body').animate({ scrollTop: $('#formErrors').offset().top - 80 }, 500);
                  }
               },
               error: function() {
                  $('#formErrors').html('Something went wrong, please try again.').removeClass('d-none');
                  $('html, body').animate({ scrollTop: $('#formErrors').offset().top - 80 }, 500);
               }
         });
      });
   </script>

   <!-- step 2-->
   <script>
      $(document).on('submit', '#legal', function(e){
         e.preventDefault();
         let form = $(this);
         let formData = new FormData(this);

         $('#formErrors').html('').addClass('d-none');

         $.ajax({
            url: "{{ route('talent.legal.store') }}",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                  if(response.status){
                     alert(response.message);
                     $('#legal_id').val(response.id);
                     $('a[href="#contact_tab"]').tab('show'); // move to next tab
                  } else {
                     let errorList = '<ul>';
                     $.each(response.errors, function(k, v){
                        errorList += '<li>'+v[0]+'</li>';
                     });
                     errorList += '</ul>';
                     $('#formErrors').html(errorList).removeClass('d-none');
                    // $('html, body').animate({scrollTop: $('#formErrors').offset().top - 80}, 500);
                  }
            }
         });
      });
   </script>

   <!-- step 3 -->
   <script>
      loadContacts();
      let contactIndex = 1;

      // Add more contact
      $('#add_contact').click(function (e) {
         e.preventDefault();

         let html = `
         <div class="singl_socil contact_block">
         <input type="hidden" name="contact[${contactIndex}][id]" value="{{ $contact->id ?? '' }}">
            <div class="mb-3 col-md-2 smal_5">
                  <label class="form-label">Name</label>
                  <input type="text" name="contact[${contactIndex}][name]" class="form-control" placeholder="Enter Name">
            </div>
            <div class="mb-3 col-md-2 smal_5">
                  <label class="form-label">Relationship</label>
                  <input type="text" name="contact[${contactIndex}][relationship]" class="form-control" placeholder="Enter Relationship">
            </div>
            <div class="mb-3 col-md-2 smal_5">
                  <label class="form-label">Email</label>
                  <input type="text" name="contact[${contactIndex}][email]" class="form-control" placeholder="Enter Email">
            </div>
            <div class="mb-3 col-md-2 smal_5">
                  <label class="form-label">Phone</label>
                  <input type="text" name="contact[${contactIndex}][phone]" class="form-control" placeholder="Enter Phone">
            </div>
            <div class="mb-3 col-md-2 smal_5">
                  <label class="form-label">Mobile</label>
                  <input type="text" name="contact[${contactIndex}][mobile]" class="form-control" placeholder="Enter Mobile">
            </div>
            <button type="button" class="btn btn-danger btn-sm remove_contact" style="margin-top:30px;">Remove</button>
         </div>`;
         
         $('#contact_wrapper').append(html);
         contactIndex++;
      });

      // Remove contact block
      $(document).on('click', '.remove_contact', function () {
         $(this).closest('.contact_block').remove();
      });




      $(document).on('submit', '#contactForm', function(e){
         e.preventDefault();
         let form = $(this);
         let formData = new FormData(this);

         $('#formErrors').html('').addClass('d-none');

         $.ajax({
            url: "{{ route('talent.contact.store') }}",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                  if (response.status) {
                     alert(response.message);
                     loadContacts(); // refresh contact table
                     $('a[href="#agencies_tab"]').tab('show'); 
                  } else {
                     alert('Error: ' + response.message);
                  }
            },
            error: function (xhr) {
                  $('#formErrors').html('Something went wrong, please try again.').removeClass('d-none');
                  $('html, body').animate({ scrollTop: $('#formErrors').offset().top - 80 }, 500);
            }
         });
      });

      // Load contact list dynamically
      function loadContacts() {
         let generalId = $('.general_id').val();
         if (!generalId) {
            console.log("No general ID provided!");
            return;
         }

         $.ajax({
            url: '/talent/contacts/list/' + generalId,
            method: "GET",
            success: function (response) {
                  let contacts = response.data ?? [];  // Use the 'data' array
                  let rows = '';
                  if (contacts.length > 0) {
                     $.each(contacts, function (i, contact) {
                        rows += `<tr>
                              <td>${contact.name ?? ''}</td>
                              <td>${contact.relationship ?? ''}</td>
                              <td>${contact.email ?? ''}</td>
                              <td>${contact.phone ?? ''}</td>
                              <td>${contact.mobile ?? ''}</td>
                        </tr>`;
                     });
                  } else {
                     rows = `<tr><td colspan="5" class="text-center">No Records found</td></tr>`;
                  }

                  $('#contactTable tbody').html(rows);
            },
            error: function(xhr, status, error) {
                  console.error("AJAX error:", error);
            }
         });
      }

   </script>
   
   
<!-- 4 -->
   <script>
      loadAgencies();
       let agencyIndex = 1;

      // Add new agency block
      $('#add_agency').click(function (e) {
         e.preventDefault();

         let html = `
         <div class="singl_socil agency_block border p-2 mb-3">
               <input type="hidden" name="agency[${agencyIndex}][id]" value="">

               <div class="mb-3 col-md-2 smal_5">
                  <label class="form-label">Agency Name</label>
                  <select class="form-control" name="agency[${agencyIndex}][agency_name]">
                     <option value="">Select Agency</option>
                     <option value="Agency 1">Agency 1</option>
                     <option value="Agency 2">Agency 2</option>
                     <option value="Agency 3">Agency 3</option>
                  </select>
               </div>

               <div class="mb-3 col-md-2 smal_5">
                  <label class="form-label">Mother Agency %</label>
                  <input type="text" name="agency[${agencyIndex}][mother_agency_percentage]" class="form-control" placeholder="Enter Mother Agency %">
               </div>

               <div class="mb-3 col-md-2 smal_5">
                  <label class="form-label">Assigned On</label>
                  <select class="form-control" name="agency[${agencyIndex}][assigned_on]">
                     <option value="">Select Option</option>
                     <option value="Gross Rate">Gross Rate</option>
                     <option value="Talent Gross">Talent Gross</option>
                     <option value="Talent Net">Talent Net</option>
                     <option value="Agency Comm.">Agency Comm.</option>
                  </select>
               </div>

               <div class="mb-3 col-md-2 smal_5">
                  <label class="form-label">Start Date</label>
                  <input type="date" name="agency[${agencyIndex}][start_date]" class="form-control">
               </div>

               <div class="mb-3 col-md-2 smal_5">
                  <label class="form-label">End Date</label>
                  <input type="date" name="agency[${agencyIndex}][end_date]" class="form-control">
               </div>

               <div class="mt-2">
                  <label class="child_as">
                     <input type="checkbox" class="child_as_check" name="agency[${agencyIndex}][mother_agency]">
                     <div class="child_as_lbl">Mother Agency</div>
                  </label>


                  <label class="child_as">
                     <input type="checkbox" class="child_as_check"  name="agency[${agencyIndex}][other_mother_agency]">
                     <div class="child_as_lbl">Other Mother Agency</div>
                  </label>

                  <label class="child_as">
                     <input type="checkbox" class="child_as_check" name="agency[${agencyIndex}][placement]">
                     <div class="child_as_lbl">Placement</div>
                  </label>

                  <label class="child_as">
                     <input type="checkbox" class="child_as_check" name="agency[${agencyIndex}][contract_received]">
                     <div class="child_as_lbl">Contract Received</div>
                  </label>
               </div>

               <button type="button" class="btn btn-danger btn-sm mt-2 remove_agency">Remove</button>
         </div>`;

         $('#agency_wrapper').append(html);
         agencyIndex++;
      });

      // Remove agency block
      $(document).on('click', '.remove_agency', function () {
         $(this).closest('.agency_block').remove();
      });

      $('#agenciesForm').submit(function(e) {
         e.preventDefault();

         let formData = new FormData(this);

         $.ajax({
            url: "{{ route('talent.agencies.store') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                  alert(response.message);
                  loadAgencies(); // reload list
                  $('a[href="#stats_tab"]').tab('show');
            },
            error: function(xhr) {
                  alert('Error: ' + xhr.responseJSON.message);
            }
         });
      });

      function loadAgencies() {
         const generalId = $('.general_id').val();

         if (!generalId) {
            console.log("No general ID provided!");
            return;
         }

         $.ajax({
            url: '/talent/agencies/list/' + generalId,
            method: "GET",
            success: function (response) {
                  let agencies = response.data ?? [];  // Use the 'data' array
                  let rows = '';
                  if (agencies.length > 0) {
                     $.each(agencies, function (i, a) {
                        rows += `<tr>
                              <td>${a.agency_name ?? ''}</td>
                              <td>${a.country ?? ''}</td>
                              <td>${a.city ?? ''}</td>
                              <td>${a.phone ?? ''}</td>
                              <td>${a.mother_agency_percentage ?? ''}</td>
                              <td>${a.assigned_on ?? ''}</td>
                              <td>${a.mother_agency ? 'Yes' : 'No'}</td>
                              <td>${a.other_mother_agency ? 'Yes' : 'No'}</td>
                              <td>${a.placement ? 'Yes' : 'No'}</td>
                              <td>${a.contract_received ? 'Yes' : 'No'}</td>
                              <td>${a.start_date ?? ''}</td>
                              <td>${a.end_date ?? ''}</td>
                        </tr>`;
                     });
                  } else {
                     rows = `<tr><td colspan="5" class="text-center">No Records found</td></tr>`;
                  }
               
                  $('#agencyTable tbody').html(rows);
            },
            error: function(xhr, status, error) {
                  console.error("AJAX error:", error);
            }
         });
      }
   </script>

   <!-- 5 -->
   <script> 
      let questionIndex = 1;

      // Add new question block
      $('#add_question').click(function (e) {
         e.preventDefault();

         let html = `
         <div class="question_block">
            <input type="hidden" name="questionnaires[${questionIndex}][id]" value="">
            <div class="mb-3 col-md-3 question_1 question_block">
               <label class="form-label">Questionnaire</label>
               <select class="form-control" name="questionnaires[${questionIndex}][question]">
                     <option value=""></option>
                     <option value="Acting">Acting</option>
                     <option value="Alcohol">Alcohol</option>
                     <option value="Allergies">Allergies</option>
                     <option value="Athletics">Athletics</option>
                     <option value="Body Piercing">Body Piercing</option>
                     <option value="Cigarettes">Cigarettes</option>
                     <option value="Contact Lenses">Contact Lenses</option>
               </select>
            </div>
            <div class="mb-3 col-md-3 question_2">
               <label class="form-label">Status</label>
               <select class="form-control" name="questionnaires[${questionIndex}][status]">
                     <option value=""></option>
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>
                     <option value="?">?</option>
               </select>
            </div>
            <div class="mb-3 col-md-3 question_3">
               <label class="form-label">Notes</label>
               <input type="text" name="questionnaires[${questionIndex}][notes]"
               class="form-control"  placeholder="Enter Notes">
            </div>
            <button type="button" class="btn btn-danger btn-sm mt-2 remove_question">Remove</button>
         </div>
         `;

         $('#question_wrapper').append(html);
         questionIndex++;
      });

      // Remove question block
      $(document).on('click', '.remove_question', function () {
         $(this).closest('.question_block').remove();
      });

      let skillIndex = 1;

      // Add new skill block
      $('#add_skill').click(function (e) {
         e.preventDefault();

         let html = `
         <div class="skill_block">
            <input type="hidden" name="skills[${skillIndex}][id]" value="">
            <div class="mb-3 col-md-3 question_1">
                  <label class="form-label">Skill Category</label>
                  <select class="form-control" name="skills[${skillIndex}][skill]">
                     <option value=""></option>
                     <option value="Category 1">Category 1</option>
                     <option value="Category 2">Category 2</option>
                     <option value="Category 3">Category 3</option>
                     <option value="Category 4">Category 4</option>
                     <option value="Category 5">Category 5</option>
                     <option value="Category 6">Category 6</option>
                     <option value="Category 7">Category 7</option>
                  </select>
            </div>
            <div class="mb-3 col-md-3 question_2">
                  <label class="form-label">Level</label>
                  <select class="form-control" name="skills[${skillIndex}][level]">
                     <option value=""></option>
                     <option value="Beginner">Beginner</option>
                     <option value="Intermediate">Intermediate</option>
                     <option value="Expert">Expert</option>
                  </select>
            </div>
            <div class="mb-3 col-md-3 question_3">
                  <label class="form-label">Notes</label>
                  <input type="text" name="skills[${skillIndex}[notes]"
                  class="form-control"  placeholder="Enter Notes">
            </div>
            <button type="button" class="btn btn-danger btn-sm mt-2 remove_skill">Remove</button>
         </div>
         `;

         $('#skill_wrapper').append(html);
         skillIndex++;
      });

      // Remove skill block
      $(document).on('click', '.remove_skill', function () {
         $(this).closest('.skill_block').remove();
      });

      $(document).on('submit', '#statsForm', function(e){
         e.preventDefault();
         let form = $(this);
         let formData = new FormData(this);

         $('#formErrors').html('').addClass('d-none');

         $.ajax({
            url: "{{ route('talent.stats.store') }}",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                  if(response.status){
                     alert(response.message);
                     $('#usage_id').val(response.id);
                     $('a[href="#document_tab"]').tab('show'); // move to next tab
                  } else {
                     let errorList = '<ul>';
                     $.each(response.errors, function(k, v){
                        errorList += '<li>'+v[0]+'</li>';
                     });
                     errorList += '</ul>';
                     $('#formErrors').html(errorList).removeClass('d-none');
                    // $('html, body').animate({scrollTop: $('#formErrors').offset().top - 80}, 500);
                  }
            }
         });
      });
   </script>   
   
   <!-- step 6 -->

   <script>
      $(document).on('submit', '#documentForm', function(e){
         e.preventDefault();

         let formData = new FormData(this);
         $.ajax({
               url: "{{ route('talent.documents.store') }}",
               method: "POST",
               data: formData,
               processData: false,
               contentType: false,
               beforeSend: function() {
                  $('.submit_btn').prop('disabled', true).text('Submitting...');
               },
               success: function(response) {
                  alert('Documents saved successfully!');
                  $('a[href="#usage_tab"]').tab('show');
                  $('.submit_btn').prop('disabled', false).text('Submit');
               },
               error: function(xhr) {
                  console.error(xhr.responseText);
                  alert('Something went wrong!');
                  $('.submit_btn').prop('disabled', false).text('Submit');
               }
         });
      });
   </script>

   <!-- step 7-->
   <script>
      $(document).on('submit', '#usageForm', function(e){
         e.preventDefault();
         let form = $(this);
         let formData = new FormData(this);

         $('#formErrors').html('').addClass('d-none');

         $.ajax({
            url: "{{ route('talent.usage.store') }}",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response){
                  if(response.status){
                     alert(response.message);
                     $('#usage_id').val(response.id);
                     $('a[href="#appointment_tab"]').tab('show'); // move to next tab
                  } else {
                     let errorList = '<ul>';
                     $.each(response.errors, function(k, v){
                        errorList += '<li>'+v[0]+'</li>';
                     });
                     errorList += '</ul>';
                     $('#formErrors').html(errorList).removeClass('d-none');
                    // $('html, body').animate({scrollTop: $('#formErrors').offset().top - 80}, 500);
                  }
            }
         });
      });
   </script>

   <!-- step 10_2 -images -->
   <script>
      $(document).ready(function () {
         const uploadArea = $('#uploadArea');
         const imageInput = $('#imageInput');
         const galleryContainer = $('#galleryContainer');

         // Click on area → open file browser
         $(document).on('click', '#uploadArea', function(e){
            e.preventDefault();
            imageInput.click();
         });

         // File input change
         imageInput.on('change', function() {
            let files = this.files;
            if (files.length === 0) return;
            uploadFiles(files);
         });

         // Drag & Drop logic
         uploadArea.on('dragover', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass('border-primary bg-light');
         });

         uploadArea.on('dragleave', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass('border-primary bg-light');
         });

         uploadArea.on('drop', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass('border-primary bg-light');

            let files = e.originalEvent.dataTransfer.files;
            if (files.length > 0) uploadFiles(files);
         });

         // Upload function
         function uploadFiles(files) {
            let formData = new FormData();
            formData.append('t_general_id', $('.general_id').val());

            // Clear old error message
            $('#uploadError').hide().html('');

            $.each(files, function(i, file) {
                  formData.append('images[]', file);
            });

            $.ajax({
                  url: '{{ route("talent.images.upload") }}',
                  type: 'POST',
                  data: formData,
                  contentType: false,
                  processData: false,
                  headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                  success: function(response) {
                     if (response.status) {
                        response.images.forEach(img => {
                              galleryContainer.append(`
                                 <div class="singl_img_view" data-id="${img.id}">
                                    <img src="${img.url}" class="singl_img_view_img">
                                    <div class="img_filter">
                                          <a href="">
                                             <i class="ti ti-edit"></i>
                                          </a>
                                          <a href="${img.url}" target="_blank">
                                             <i class="ph-duotone ph-download-simple"></i>
                                          </a>
                                          <a href="#" class="crop-image"><i class="ph-duotone ph-crop"></i></a>
                                          <a href="#" class="delete-image" data-id="${img.id}">
                                             <i class="ph-duotone ph-x-circle"></i>
                                          </a>
                                          <a href="#" class="rotate-left">
                                             <i class="ph-duotone ph-arrow-bend-up-left"></i>
                                          </a>
                                          <a href="#" class="rotate-right">
                                             <i class="ph-duotone ph-arrow-bend-up-right"></i>
                                          </a>
                                    </div>
                                 </div>
                              `);
                        });
                        imageInput.val('');
                        updateImageCounts(); // refresh count
                     } else {
                        // show error returned by backend
                        $('#uploadError').text(response.message || 'Upload failed. Please try again.');
                     }
                  },
                  error: function(xhr) {
                     let message = 'Error uploading images.';

                     if (xhr.status === 422 && xhr.responseJSON.errors) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = [];

                        // Loop through each validation error
                        $.each(errors, function(field, msgs) {
                              // Extract the index number from something like "images.0"
                              let match = field.match(/\d+/);
                              if (match) {
                                 let index = parseInt(match[0]);
                                 let fileName = files[index]?.name || `Image ${index + 1}`;
                                 msgs.forEach(msg => {
                                    // Replace "images.0" with actual file name
                                    errorMessages.push(msg.replace(field, `"${fileName}"`));
                                 });
                              } else {
                                 // For non-indexed fields
                                 msgs.forEach(msg => errorMessages.push(msg));
                              }
                        });

                        message = errorMessages.join('<br>');
                     } else if (xhr.responseJSON && xhr.responseJSON.message) {
                        message = xhr.responseJSON.message;
                     }

                     // Display nicely formatted message
                     $('#uploadError').html(message).show();
                  }
            });
         }

         // rotate image
         $(document).on('click', '.rotate-left, .rotate-right', function(e) {
            e.preventDefault();

            // Find the image inside the same container
            let container = $(this).closest('.singl_img_view');
            let image = container.find('.singl_img_view_img');
            let imageId = container.data('id');
            let currentRotation = parseInt(image.data('rotation')) || 0;

            // Rotate ±90 degrees depending on which button was clicked
            if ($(this).hasClass('rotate-left')) {
               currentRotation -= 90;
            } else {
               currentRotation += 90;
            }

            // Apply rotation within same div
            image.css({
               'transform': `rotate(${currentRotation}deg)`,
               'transform-origin': 'center center',
               'transition': 'transform 0.3s ease'
            });

            // Store rotation value
            image.data('rotation', currentRotation);

            // Save rotation in DB
            $.ajax({
               url: '{{ route("talent.image.rotate") }}',
               type: 'POST',
               data: {
                     id: imageId,
                     rotation: currentRotation,
                     _token: '{{ csrf_token() }}'
               },
               success: function(response) {
                     console.log('Rotation saved:', response.message);
               },
               error: function(xhr) {
                     console.error('Error saving rotation:', xhr.responseText);
               }
            });
         });

         // CROP IMAGE

         let activeCropper = null;        
         $(document).on('click', '.crop-image', function (e) {
            e.preventDefault();

            let container = $(this).closest('.singl_img_view');
            let img = container.find('img')[0];

            // Disable previous cropper (if another one was active)
            if (activeCropper && activeCropper.image !== img) {
               activeCropper.destroy();
               $('.save-crop').remove();
               $('.crop-image').removeClass('active');
               $('.singl_img_view.crop-active')
                     .removeClass('crop-active')
                     .css('height', '')
                     .css('z-index', '');
            }

            // If same image cropper is active → disable it
            if (activeCropper && activeCropper.image === img) {
               activeCropper.destroy();
               activeCropper = null;
               container.find('.save-crop').remove();
               $(this).removeClass('active');
               container.removeClass('crop-active').css({
                     height: '',
                     paddingBottom: ''
               });
               return;
            }

            // Activate cropper
            activeCropper = new Cropper(img, {
               aspectRatio: NaN,
               viewMode: 1,
               autoCropArea: 1,
               background: false,
               movable: true,
               cropBoxResizable: true,
            });

            $(this).addClass('active');

            // Show Save Crop button inside same div
            if (container.find('.save-crop').length === 0) {
               container.append(`
                     <button class="btn btn-sm btn-success mt-2 save-crop">
                        Save Crop
                     </button>
               `);
            }

            // Expand only this div height slightly (e.g., +100px)
            // Also bring it above other divs so crop area edges are visible
            container.addClass('crop-active')
                     .css('z-index', '10')
                     .animate({ height: container.outerHeight() + 100 }, 200);
         });


         // Save crop
         $(document).on('click', '.save-crop', function() {
            if (!activeCropper) return;
            let container = $(this).closest('.singl_img_view');
            let img = container.find('img');
            let imageId = container.data('id');

            let canvas = activeCropper.getCroppedCanvas({
               width: 300,
               height: 300,
            });

            // Replace image preview
            img.attr('src', canvas.toDataURL());

            // Clean up
            activeCropper.destroy();
            activeCropper = null;
            $(this).remove();

            // Reset height and padding to original
            container.removeClass('crop-active').css({
               height: '',
               paddingBottom: ''
            });

            // send cropped image to backend via AJAX
            const croppedDataURL = canvas.toDataURL('image/png');
            $.ajax({
               url: '{{ route("talent.image.crop") }}',
               type: 'POST',
               data: {
                     id: imageId,
                     cropped_image: croppedDataURL,
                     _token: '{{ csrf_token() }}'
               },
               success: function (response) {
                     if (response.status) {
                        // Update image in UI
                        $(img).attr('src', response.url + '?v=' + new Date().getTime());
                        console.log('Cropped image saved:', response.message);
                     }
               },
               error: function (xhr) {
                     console.error('Error saving crop:', xhr.responseText);
               },
               complete: function () {
                     // Clean up cropper UI
                     if (activeCropper) {
                        activeCropper.destroy();
                        activeCropper = null;
                     }
                     container.find('.save-crop').remove();
                     container.css({ height: '', paddingBottom: '' });
                     container.find('.crop-image').removeClass('active');
               }
            });
         });


         // Delete image
         $(document).on('click', '.delete-image', function(e) {
            e.preventDefault();

            let id = $(this).data('id');
            let container = $(this).closest('.singl_img_view');

            Swal.fire({
               title: 'Are you sure?',
               text: "This image will be permanently deleted.",
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#d33',
               cancelButtonColor: '#6c757d',
               confirmButtonText: 'Yes, delete it!',
               background: '#fff'
            }).then((result) => {
               if (result.isConfirmed) {
                     $.ajax({
                        url: `/talent/images/${id}`,
                        type: 'DELETE',
                        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                        success: function(res) {
                           if (res.status) {
                                 Swal.fire({
                                    icon: 'success',
                                    title: 'Deleted!',
                                    text: res.message || 'Image deleted successfully.',
                                    timer: 1500,
                                    showConfirmButton: false
                                 });
                                 container.fadeOut(400, function() {
                                    $(this).remove();
                                    updateImageCounts(); // refresh count
                                 });
                           } else {
                                 Swal.fire('Error', res.message || 'Unable to delete image.', 'error');
                           }
                        },
                        error: function() {
                           Swal.fire('Error', 'Something went wrong. Please try again.', 'error');
                        }
                     });
               }
            });
         });

      });

      // image count
      function updateImageCounts() {
         let totalImages = $('#image_panl .tab_img_galry .singl_img_view').length;
         console.log('fdffdf' + totalImages);
         $('#allImageCount').text(totalImages);
      }
      
   </script>

   <!-- step 10_3 -video -->
   <script>
      
   // Call after page loads
   $(document).ready(function() {
      updateVideoCounts();
      updateImageCounts();
   });

   $(document).on('submit', '#videoForm', function(e) {
      e.preventDefault();
      saveVideo($(this));
   });

   function saveVideo(form) {
    let formData = new FormData(form[0]);
    formData.append('t_general_id', $('.general_id').val());

    // Clear old errors
    $('#videoError').hide().html('');

    $.ajax({
        url: '{{ route("talent.video.upload") }}',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },

        success: function(response) {
            if (response.status) {
            //   toastr.success(response.message);

               // Close modal + reset form
               $('#embed_video').modal('hide');
               form[0].reset();
               $('#video_id').val('');

               // Extract YouTube thumbnail if it's a YouTube embed
               let thumbnailUrl = getThumbnailFromEmbed(response.video.embed_code);

               // Build video thumbnail block
               let html = `
                     <div class="singl_img_view" data-id="${response.video.id}">
                        <img src="${thumbnailUrl}" class="singl_img_view_img" alt="${response.video.title}">
                        <div class="ply_btn_vid">
                           <a class="playVideoBtn" data-embed='${response.video.embed_code}'>
                                 <i class="ph-duotone ph-play"></i>
                           </a>
                        </div>
                        <div class="clear"></div>
                        <div class="img_filter">
                           <a href="#" class="editVideoBtn"
                                 data-id="${response.video.id}"
                                 data-title="${response.video.title}"
                                 data-embed="${response.video.embed_code}"
                                 data-download="${response.video.download_link ?? ''}"
                                 data-description="${response.video.description ?? ''}">
                                 <i class="ti ti-edit"></i>
                           </a>
                           <a href="#" class="deleteVideo" data-id="${response.video.id}">
                                 <i class="ph-duotone ph-x-circle"></i>
                           </a>
                        </div>
                     </div>
               `;

               let existing = $(`.singl_img_view[data-id="${response.video.id}"]`);
               
               if (existing.length) {
                     existing.replaceWith(html);
               } else {
                     $('.tab_video_galry').append(html);
               }
               // update count dynamically
               updateVideoCounts();
            } else {
               $('#videoError').text(response.message || 'Save failed. Please try again.').show();
            }
         },
        error: function(xhr) {
            let message = 'Error saving video.';

            if (xhr.status === 422 && xhr.responseJSON.errors) {
                let errors = xhr.responseJSON.errors;
                let errorMessages = [];

                $.each(errors, function(field, msgs) {
                    msgs.forEach(msg => errorMessages.push(msg));
                });

                message = errorMessages.join('<br>');
            } else if (xhr.responseJSON && xhr.responseJSON.message) {
                message = xhr.responseJSON.message;
            }

            $('#videoError').html(message).show();
        }
    });
   }

   function getThumbnailFromEmbed(embedCode) {
    try {
        let match = embedCode.match(/(?:youtube\.com\/embed\/|youtu\.be\/)([A-Za-z0-9_-]+)/);
        if (match && match[1]) {
            return `https://img.youtube.com/vi/${match[1]}/hqdefault.jpg`;
        }
    } catch (e) {
        console.warn("Could not extract YouTube thumbnail", e);
    }
    // Fallback generic thumbnail
    return 'assets/images/default-video-thumb.jpg';
   }


   $(document).on('click', '.playVideoBtn', function() {
      let embedCode = $(this).data('embed');

      // If it's just a URL, wrap it inside an iframe
      let iframeHtml = '';
      if (embedCode.includes('<iframe')) {
         iframeHtml = embedCode; // already full iframe embed
      } else {
         iframeHtml = `<iframe width="100%" height="400" src="${embedCode}?autoplay=1" frameborder="0" allowfullscreen></iframe>`;
      }

      // You can show this in a popup/modal for a cleaner look
      Swal.fire({
         html: `<div class="ratio ratio-16x9">${iframeHtml}</div>
               <button id="closeVideoPopup" class="btn btn-danger btn-sm">Close</button>
         `,
         width: '60%',
         showConfirmButton: false,
         background: 'transparent',
         customClass: { popup: 'no-background' },
         didOpen: () => {
               // handle manual close button
               $('#closeVideoPopup').on('click', function() {
                  Swal.close();
               });
         },
         didClose: () => {
               // stop video on close
               $('.swal2-container iframe').attr('src', '');
         }
      });
   });

   // Populate modal for edit
   $(document).on('click', '.editVideoBtn', function(e) {
      e.preventDefault();

      $('#video_id').val($(this).data('id'));
      $('#video_title').val($(this).data('title'));
      $('#video_embed').val($(this).data('embed'));
      $('#video_download').val($(this).data('download'));
      $('#video_description').val($(this).data('description'));

      $('#embed_video').modal('show');
   });

   // delete video
   $(document).on('click', '.deleteVideo', function(e) {
      e.preventDefault();

      let videoId = $(this).data('id');
      let videoDiv = $(this).closest('.singl_img_view');

      Swal.fire({
         title: 'Are you sure?',
         text: "This video will be permanently deleted.",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#d33',
         cancelButtonColor: '#6c757d',
         confirmButtonText: 'Yes, delete it!',
         background: '#fff'
      }).then((result) => {
         if (result.isConfirmed) {
               $.ajax({
                  url: '{{ route("talent.video.delete") }}', // Adjust route name
                  type: 'POST',
                  data: {
                     _token: '{{ csrf_token() }}',
                     id: videoId
                  },
                  success: function(response) {
                     if (response.status) {
                           Swal.fire({
                              icon: 'success',
                              title: 'Deleted!',
                              text: response.message || 'Video has been deleted.',
                              timer: 1500,
                              showConfirmButton: false
                           });
                           
                           videoDiv.fadeOut(400, function() {         
                              $(this).remove();    
                              updateVideoCounts(); // refresh counts                          
                           });
                     } else {
                           Swal.fire('Error', response.message || 'Unable to delete video.', 'error');
                     }
                  },
                  error: function() {
                     Swal.fire('Error', 'Something went wrong. Please try again.', 'error');
                  }
               });
         }
      });
   });

   // video count
   function updateVideoCounts() {
      let totalVideos = $('#video_panl .tab_video_galry .singl_img_view').length;
      $('#allCount').text(totalVideos);
   }

   </script> 

@endsection