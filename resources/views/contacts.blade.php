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
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="javascript: void(0)">Home</a></li>
                     <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                     <li class="breadcrumb-item" aria-current="page">Home</li>
                  </ul>
                  <div class="clear"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12 col-md-12">
            <div class="card table-card">
               <div class="filter_bx 603">
                  <div class="flt-toolbar">
                     <!-- Search bar -->
                     <div class="flt-search-wrap" role="search">
                        <!-- search icon -->
                        <svg class="flt-search-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                           <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.6"></circle>
                           <path d="M16.5 16.5L21 21" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"></path>
                        </svg>
                        <input id="fltSearch" class="flt-search-input" type="search" placeholder="Search..." aria-label="Search" />
                        <button class="flt-clear-btn" id="fltClearBtn" aria-label="Clear search">
                           <!-- small x icon -->
                           <svg viewBox="0 0 24 24" fill="none" width="18" height="18" aria-hidden="true">
                              <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                           </svg>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="clear"></div>
               <div class="card-header">
                  <h5>Contacts</h5>
                  <a class="add_compns add_compns_cont" data-bs-toggle="modal" data-bs-target="#login-modal">
                  <i class="ti ti-file-plus"></i>
                  Add Contacts
                  </a>
                  <div class="clear"></div>
               </div>
               <div class="pro-scroll" style=" position: relative">
                  <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-hover my_tble">
                           <thead>
                              <tr>
                                 <th>First Name</th>
                                 <th>Last Name</th>
                                 <th>Job Title </th>
                                 <th>Companie</th>
                                 <th>Email ID</th>
                                 <th>Mobile</th>
                                 <th>Phone</th>
                                 <th>Fax</th>
                                 <th>Social Link</th>
                                 <th>Note</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Lorem First Name</td>
                                 <td>Lorem Last Name</td>
                                 <td>Lorem Job</td>
                                 <td>Lorem Companie </td>
                                 <td>site@info.com</td>
                                 <td>+123 456 7890</td>
                                 <td>+123 456 7890</td>
                                 <td>+123 456 7890</td>
                                 <td>instagram link</td>
                                 <td>
                                    <div class="notes_coont">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Lorem First Name</td>
                                 <td>Lorem Last Name</td>
                                 <td>Lorem Job</td>
                                 <td>Lorem Companie </td>
                                 <td>site@info.com</td>
                                 <td>+123 456 7890</td>
                                 <td>+123 456 7890</td>
                                 <td>+123 456 7890</td>
                                 <td>instagram link</td>
                                 <td>
                                    <div class="notes_coont">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Lorem First Name</td>
                                 <td>Lorem Last Name</td>
                                 <td>Lorem Job</td>
                                 <td>Lorem Companie </td>
                                 <td>site@info.com</td>
                                 <td>+123 456 7890</td>
                                 <td>+123 456 7890</td>
                                 <td>+123 456 7890</td>
                                 <td>instagram link</td>
                                 <td>
                                    <div class="notes_coont">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Lorem First Name</td>
                                 <td>Lorem Last Name</td>
                                 <td>Lorem Job</td>
                                 <td>Lorem Companie </td>
                                 <td>site@info.com</td>
                                 <td>+123 456 7890</td>
                                 <td>+123 456 7890</td>
                                 <td>+123 456 7890</td>
                                 <td>instagram link</td>
                                 <td>
                                    <div class="notes_coont">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Lorem First Name</td>
                                 <td>Lorem Last Name</td>
                                 <td>Lorem Job</td>
                                 <td>Lorem Companie </td>
                                 <td>site@info.com</td>
                                 <td>+123 456 7890</td>
                                 <td>+123 456 7890</td>
                                 <td>+123 456 7890</td>
                                 <td>instagram link</td>
                                 <td>
                                    <div class="notes_coont">
                                       Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- [ Main Content ] end -->
   </div>
</div>
<div class="modal fade login-modal upload_doc cont_ad_pop" id="login-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content card mb-0 user-card">
         <div class="modal-body">
            <div class="col-md-12" bis_skin_checked="1">
               <div class="card" bis_skin_checked="1">
                  <div class="card-header" bis_skin_checked="1">
                     <h5>Add Contacts</h5>
                  </div>
                  <div class="card-body" bis_skin_checked="1">
                     <div class="row" bis_skin_checked="1">
                        <div class="col-md-12" bis_skin_checked="1">
                           <form class="wrap_form">
                              <div class="mb-3 col-md-4" bis_skin_checked="1">
                                 <label class="form-label">First Name</label>
                                 <input type="text" class="form-control" placeholder="Enter First Name">
                              </div>
                              <div class="mb-3 col-md-4 center_input" bis_skin_checked="1">
                                 <label class="form-label">Last Name</label>
                                 <input type="email" class="form-control" placeholder="Enter Last Name">
                              </div>
                              <div class="mb-3 col-md-4 right_form" bis_skin_checked="1">
                                 <label class="form-label">Job Title</label>
                                 <input type="email" class="form-control" placeholder="Enter Job Title">
                              </div>
                              <div class="clear" bis_skin_checked="1"></div>
                              
                              <div class="mb-3 col-md-4 " bis_skin_checked="1">
                                 <label class="form-label">Select Companie</label>
                                 <select class="form-control" >
                                    <option>Select Companie</option>
                                    <option>Companie A</option>
                                    <option>Companie B</option>
                                    <option>Companie C</option>
                                    <option>Companie D</option>
                                 </select>
                              </div>

                              <div class="mb-3 col-md-4 center_input" bis_skin_checked="1">
                                 <label class="form-label">Work Email ID</label>
                                 <input type="text" class="form-control" placeholder="Enter Work Email ID">
                              </div>
                              <div class="mb-3 col-md-4 right_form" bis_skin_checked="1">
                                 <label class="form-label">Mobile</label>
                                 <input type="text" class="form-control" placeholder="Enter Mobile">
                              </div>
                              <div class="clear"></div>
                              <div class="mb-3 col-md-4 " bis_skin_checked="1">
                                 <label class="form-label">Phone</label>
                                 <input type="email" class="form-control" placeholder="Enter Phone">
                              </div>
                              
                              <div class="mb-3 col-md-4 center_input" bis_skin_checked="1">
                                 <label class="form-label">Fax</label>
                                 <input type="email" class="form-control" placeholder="Enter Fax">
                              </div>
                              <div class="mb-3 col-md-4 right_form" bis_skin_checked="1">
                                 <label class="form-label">Social Link</label>
                                 <input type="email" class="form-control" placeholder="Enter Social Link">
                              </div>
                              <div class="clear" bis_skin_checked="1"></div>

                              <div class="mb-3 col-md-4 " bis_skin_checked="1">
                                 <label class="form-label">Note</label>
                                 <textarea  class="form-control" placeholder="Enter Note"></textarea>
                              </div>
                              <div class="clear" bis_skin_checked="1"></div>

                              <button type="submit" class="submit_btn flot_right">ADD Contact</button>
                           </form>
                        </div>
                        <div class="clear" bis_skin_checked="1"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clear"></div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')
<script>
   (function () {
     const panel = document.getElementById('fltPanel');
     const btn = document.getElementById('fltFilterBtn');
     const caret = document.getElementById('fltCaret');
   
     // Smooth slide toggle by animating to the panel's scrollHeight
     let isOpen = false;
     function openPanel() {
       panel.style.height = panel.scrollHeight + 'px';
       panel.classList.add('flt-panel-open');
       btn.setAttribute('aria-expanded', 'true');
       caret.classList.add('flt-caret-open');
       isOpen = true;
     }
     function closePanel() {
       // set explicit height before collapsing so transition works
       panel.style.height = panel.scrollHeight + 'px';
       // force reflow
       panel.offsetHeight;
       panel.style.height = '0px';
       panel.classList.remove('flt-panel-open');
       btn.setAttribute('aria-expanded', 'false');
       caret.classList.remove('flt-caret-open');
       isOpen = false;
     }
     btn.addEventListener('click', () => {
       isOpen ? closePanel() : openPanel();
     });
   
     // Close when clicking outside
     document.addEventListener('click', (e) => {
       if (!panel.contains(e.target) && !btn.contains(e.target) && isOpen) {
         closePanel();
       }
     });
   
     // Recompute height on content changes / resize
     const ro = new ResizeObserver(() => {
       if (isOpen) {
         panel.style.height = panel.scrollHeight + 'px';
       }
     });
     ro.observe(panel);
   
     // Option pill toggle (aria-pressed)
     document.querySelectorAll('.flt-option').forEach(opt => {
       opt.addEventListener('click', () => {
         const pressed = opt.getAttribute('aria-pressed') === 'true';
         opt.setAttribute('aria-pressed', String(!pressed));
       });
     });
   
     // Clear search button
     const search = document.getElementById('fltSearch');
     const clearBtn = document.getElementById('fltClearBtn');
     function syncClear() {
       clearBtn.style.visibility = search.value ? 'visible' : 'hidden';
     }
     syncClear();
     search.addEventListener('input', syncClear);
     clearBtn.addEventListener('click', () => {
       search.value = '';
       search.dispatchEvent(new Event('input'));
       search.focus();
     });
   })();
</script>
@endsection

