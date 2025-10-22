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
<div class="modal fade login-modal upload_doc" id="embed_video" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content card mb-0 user-card">
         <div class="modal-body">
            <div class="d-flex mb-4">
               <div class="flex-grow-1 me-3">
                  <h4 class="f-w-500 mb-1">Embed Video</h4>
               </div>
               <div class="flex-shrink-0"><a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal"><i class="ti ti-x f-20"></i></a></div>
            </div>
            <div class="">
               <form class="wrap_form">
                  <div class="mb-6 col-md-6 video_emb1" bis_skin_checked="1">
                     <label class="form-label">Video title</label>
                     <input type="text" class="form-control" placeholder="Enter Video title">
                  </div>
                  <div class="mb-6 col-md-6 video_emb1" bis_skin_checked="1">
                     <label class="form-label">Embed Code</label>
                     <input type="text" class="form-control" placeholder="Enter Embed Code">
                  </div>
                  <div class="mb-6 col-md-6 video_emb1" bis_skin_checked="1">
                     <label class="form-label">Video Download Link</label>
                     <input type="text" class="form-control" placeholder="Enter Video Download Link">
                  </div>
                  <div class="mb-6 col-md-6 video_emb1" bis_skin_checked="1">
                     <label class="form-label">Description</label>
                     <textarea class="form-control" placeholder="Enter Description" rows="3" ></textarea>
                  </div>
                  <div class="clear"></div>
                  <div class="clear" bis_skin_checked="1"></div>
                  <button type="submit" class="submit_btn flot_right flot_right_pop">Submit</button>
               </form>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
         </div>
      </div>
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
                     <input type="checkbox" name="agency[${agencyIndex}][mother_agency]">
                     <div class="child_as_lbl">Mother Agency</div>
                  </label>

                  <label class="child_as">
                     <input type="checkbox" name="agency[${agencyIndex}][other_mother_agency]">
                     <div class="child_as_lbl">Other Mother Agency</div>
                  </label>

                  <label class="child_as">
                     <input type="checkbox" name="agency[${agencyIndex}][placement]">
                     <div class="child_as_lbl">Placement</div>
                  </label>

                  <label class="child_as">
                     <input type="checkbox" name="agency[${agencyIndex}][contract_received]">
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
@endsection