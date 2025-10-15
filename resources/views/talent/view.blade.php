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
                     <div class="flt-panel-wrap">
                        <button class="flt-filter-btn" id="fltFilterBtn" aria-expanded="false" aria-controls="fltPanel">
                           <!-- funnel icon -->
                           <svg class="flt-filter-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                              <path d="M3 5h18l-7 8v4l-4 2v-6L3 5z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                           </svg>
                           <span class="flt-filter-text">Filter</span>
                           <!-- caret -->
                           <svg class="flt-caret" id="fltCaret" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                              <path d="M5 7l5 6 5-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </button>
                        <!-- Slide toggle panel -->
                        <div class="flt-panel" id="fltPanel" role="region" aria-label="Filters">
                           <div class="flt-panel-inner">
                              <!-- Section 1: Categories -->
                              <section class="flt-section" aria-labelledby="fltCatsTitle">
                                 <div class="flt-section-title" id="fltCatsTitle">Categories</div>
                                 <ul class="flt-list">
                                    <!-- Example categories (checkboxes) -->
                                    <li class="flt-item">
                                       <input id="flt-cat-1" class="flt-check" type="checkbox" />
                                       <label class="flt-label" for="flt-cat-1">Technology</label>
                                    </li>
                                    <li class="flt-item">
                                       <input id="flt-cat-2" class="flt-check" type="checkbox" />
                                       <label class="flt-label" for="flt-cat-2">Design</label>
                                    </li>
                                    <li class="flt-item">
                                       <input id="flt-cat-3" class="flt-check" type="checkbox" />
                                       <label class="flt-label" for="flt-cat-3">Marketing</label>
                                    </li>
                                    <li class="flt-item">
                                       <input id="flt-cat-4" class="flt-check" type="checkbox" />
                                       <label class="flt-label" for="flt-cat-4">Finance</label>
                                    </li>
                                    <li class="flt-item">
                                       <input id="flt-cat-5" class="flt-check" type="checkbox" />
                                       <label class="flt-label" for="flt-cat-5">Operations</label>
                                    </li>
                                    <li class="flt-item">
                                       <input id="flt-cat-6" class="flt-check" type="checkbox" />
                                       <label class="flt-label" for="flt-cat-6">HR</label>
                                    </li>
                                 </ul>
                              </section>
                           </div>
                        </div>
                     </div>
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
                     <div class="grid_card">
                        <a class="activ_grd" href="view_talent.php">Grid View</a>
                        <a href="card_view_talent.php">Card View</a>
                        <div class="clear"></div>
                     </div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div class="clear"></div>
               <div class="card-header">
                  <h5>Talent</h5>
                  <a class="add_compns" href="add_talent.php">
                  <i class="ti ti-file-plus"></i>
                  Add Talent
                  </a>
                  <div class="clear"></div>
               </div>
               <div class="pro-scroll" style=" position: relative">
                  <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-hover my_tble">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Talent</th>
                                 <th>First Name</th>
                                 <th>Last Name </th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Mobile</th>
                                 <th>WhatsApp</th>
                                 <th>Mother Ag</th>
                                 <th>Mother Ag. Country</th>
                                 <th>Instagram</th>
                                 <th>TikTok</th>
                                 <th>Facebook</th>
                                 <th>Date Joined</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 12SDFEDE </a> </td>
                                 <td><img src="assets/images/user/avatar-2.jpg" class="logo_compns" ></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > user@gmail.com </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" >120K</a></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" > 20K </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 13-Dec-2010 </a> </td>
                              </tr>
                              <tr>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 12SDFEDE </a> </td>
                                 <td><img src="assets/images/user/avatar-2.jpg" class="logo_compns" ></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > user@gmail.com </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" >120K</a></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" > 20K </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 13-Dec-2010 </a> </td>
                              </tr>
                              <tr>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 12SDFEDE </a> </td>
                                 <td><img src="assets/images/user/avatar-2.jpg" class="logo_compns" ></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > user@gmail.com </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" >120K</a></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" > 20K </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 13-Dec-2010 </a> </td>
                              </tr>
                              <tr>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 12SDFEDE </a> </td>
                                 <td><img src="assets/images/user/avatar-2.jpg" class="logo_compns" ></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > user@gmail.com </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" >120K</a></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" > 20K </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 13-Dec-2010 </a> </td>
                              </tr>
                              <tr>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 12SDFEDE </a> </td>
                                 <td><img src="assets/images/user/avatar-2.jpg" class="logo_compns" ></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > user@gmail.com </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" >120K</a></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" > 20K </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 13-Dec-2010 </a> </td>
                              </tr>
                              <tr>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 12SDFEDE </a> </td>
                                 <td><img src="assets/images/user/avatar-2.jpg" class="logo_compns" ></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > user@gmail.com </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" >120K</a></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" > 20K </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 13-Dec-2010 </a> </td>
                              </tr>
                              <tr>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 12SDFEDE </a> </td>
                                 <td><img src="assets/images/user/avatar-2.jpg" class="logo_compns" ></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem Name </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > user@gmail.com </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > +123 456 7890 </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > Lorem </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" >120K</a></td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 120K </a> </td>
                                 <td><a href="talent_detail.php" class="lnk_a" > 20K </a> </td>
                                 <td> <a href="talent_detail.php" class="lnk_a" > 13-Dec-2010 </a> </td>
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