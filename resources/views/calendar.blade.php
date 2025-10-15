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
                     <li class="breadcrumb-item" aria-current="page">Home</li>
                  </ul>
                  <div class="cleint_srcg">
                     <div class="carda">
                        <div class="search">
                           <svg class="icon" width="22" height="22" viewBox="0 0 24 24" aria-hidden="true">
                              <path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79L20 21.5 21.5 20l-6-6zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                           </svg>
                           <input
                              id="client-search"
                              class="input"
                              type="text"
                              placeholder="Search clients by name…"
                              autocomplete="off"
                              role="combobox"
                              aria-expanded="false"
                              aria-controls="client-list"
                              aria-autocomplete="list"
                              />
                           <button class="clear_as" id="clear-btn" title="Clear" aria-label="Clear">&times;</button>
                           <ul id="client-list" class="listbox" role="listbox" aria-label="Clients"></ul>
                           <div id="selected" class="selected" hidden></div>
                        </div>
                     </div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <!-- prettier-ignore -->
         <div class="col-md-10 col-xxl-9 mb-4">
            <a href="#" class="d-inline-flex align-items-center gap-2 d-xl-none btn btn-dark mb-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_component"><i class="ti ti-menu-2"></i> Explore Components</a>
            <h2 class="calndr_main" >Calendar</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="filter_rang">
               <div class="filter_text">
                  Filter
               </div>
               <div class="filter-container">
                  <!-- Location -->
                  <div class="dropdown">
                     <button class="dropdown-btn">Location</button>
                     <div class="dropdown-content">
                        <label><input type="checkbox" value="New York"> New York</label>
                        <label><input type="checkbox" value="London"> London</label>
                        <label><input type="checkbox" value="Tokyo"> Tokyo</label>
                     </div>
                     <div class="clear"></div>
                     <i class="ti ti-chevron-down down_arw"></i>
                  </div>
                  <!-- Events -->
                  <div class="dropdown">
                     <button class="dropdown-btn">Events</button>
                     <div class="dropdown-content">
                        <label><input type="checkbox" value="Conference"> Conference</label>
                        <label><input type="checkbox" value="Workshop"> Workshop</label>
                        <label><input type="checkbox" value="Webinar"> Webinar</label>
                     </div>
                     <div class="clear"></div>
                     <i class="ti ti-chevron-down down_arw"></i>
                  </div>
                  <!-- Bookers -->
                  <div class="dropdown">
                     <button class="dropdown-btn">Bookers</button>
                     <div class="dropdown-content">
                        <label><input type="checkbox" value="Alice"> Alice</label>
                        <label><input type="checkbox" value="Bob"> Bob</label>
                        <label><input type="checkbox" value="Charlie"> Charlie</label>
                     </div>
                     <div class="clear"></div>
                     <i class="ti ti-chevron-down down_arw"></i>
                  </div>
                  <!-- Clients -->
                  <div class="dropdown">
                     <button class="dropdown-btn">Clients</button>
                     <div class="dropdown-content">
                        <label><input type="checkbox" value="Client A"> Client A</label>
                        <label><input type="checkbox" value="Client B"> Client B</label>
                        <label><input type="checkbox" value="Client C"> Client C</label>
                     </div>
                     <div class="clear"></div>
                     <i class="ti ti-chevron-down down_arw"></i>
                  </div>
               </div>
            </div>
            <div class="clear"></div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body position-relative calnd_panle">
                  <div class="event_singl gren_bx event_singl_1" >
                     <div class="evnt_titl_bx">
                        Creative Jam...
                     </div>
                     <i class="ph-duotone ph-alarm" ></i>
                  </div>
                  <div class="event_singl red_bx event_singl_2">
                     <div class="evnt_titl_bx">
                        Lorem Text
                     </div>
                     <i class="ph-duotone ph-suitcase-simple"></i>
                  </div>
                  <div class="event_singl orng_bx event_singl_3">
                     <div class="evnt_titl_bx">
                        Evening Under...
                     </div>
                     <i class="ph-duotone ph-suitcase-simple"></i>
                  </div>
                  <div class="event_singl blue_bx event_singl_4">
                     <div class="evnt_titl_bx">
                        Innovate 2025
                     </div>
                     <i class="ph-duotone ph-suitcase-simple"></i>
                  </div>
                  <div class="event_singl gren_bx event_singl_5">
                     <div class="evnt_titl_bx">
                        Midweek Stra...
                     </div>
                     <i class="ph-duotone ph-suitcase-simple"></i>
                  </div>
                  <div class="event_singl blue_bx event_singl_6">
                     <div class="evnt_titl_bx">
                        Sunset & Chill...
                     </div>
                     <i class="ph-duotone ph-file-doc"></i>
                  </div>
                  <div class="event_singl orng_bx event_singl_7">
                     <div class="evnt_titl_bx">
                        Weekend Adve...
                     </div>
                     <i class="ph-duotone ph-alarm"></i>
                  </div>
                  <div class="event_singl red_bx event_singl_8">
                     <div class="evnt_titl_bx">
                        AI in Action...
                     </div>
                     <i class="ph-duotone ph-file-doc"></i>
                  </div>
                  <div class="clear"></div>
                  <div id="calendar" class="calendar"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- [ Main Content ] end -->
   </div>
</div>
<!-- [ Main Content ] end -->
<div class="modal fade" id="calendar-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header justify-content-between">
            <h3 class="calendar-modal-title f-w-600 mb-0 text-truncate">Modal title</h3>
            <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default" data-bs-dismiss="modal"><i class="ti ti-x f-18"></i></a>
         </div>
         <div class="modal-body popup_calndr">
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-secondary"><i class="ti ti-calendar-event f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Event Title</b></h5>
                  <p class="pc-event-title text-muted hide_all">  </p>
                  <p class="evnt_answer" >Creative Jam Session</p>
               </div>
            </div>
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-secondary"><i class="ti ti-calendar-event f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Event Type</b></h5>
                  <p class="pc-event-title text-muted hide_all">  </p>
                  <p class="evnt_answer" >Casting</p>
               </div>
            </div>
            <div class="clear"></div>
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-secondary"><i class="ti ti-calendar-event f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Start Date</b></h5>
                  <p class="pc-event-title text-muted hide_all">  </p>
                  <p class="evnt_answer" >15-Aug-2025</p>
               </div>
            </div>
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-secondary"><i class="ti ti-calendar-event f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>End Date</b></h5>
                  <p class="pc-event-title text-muted hide_all">  </p>
                  <p class="evnt_answer" >15-Aug-2025</p>
               </div>
            </div>
            <div class="clear"></div>
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-secondary"><i class="ti ti-user f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Client Name</b></h5>
                  <p class="pc-event-title text-muted hide_all">  </p>
                  <p class="evnt_answer" >Michael Johnson</p>
               </div>
            </div>
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-secondary"><i class="ti ti-user f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Talent Name</b></h5>
                  <p class="pc-event-title text-muted hide_all">  </p>
                  <p class="evnt_answer" >Jane Doe</p>
               </div>
            </div>
            <div class="clear"></div>
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-secondary"><i class="ti ti-clock f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Call Time</b></h5>
                  <p class="pc-event-title text-muted hide_all">  </p>
                  <p class="evnt_answer" >12.30 AM</p>
               </div>
            </div>
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-secondary"><i class="ti ti-device-mobile f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Mobile</b></h5>
                  <p class="pc-event-title text-muted hide_all">  </p>
                  <p class="evnt_answer" >+123 456 7890</p>
               </div>
            </div>
            <div class="clear"></div>
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-secondary"><i class="ti ti-map f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Location</b></h5>
                  <p class="pc-event-title text-muted hide_all">  </p>
                  <p class="evnt_answer" >Lorem Location</p>
               </div>
            </div>
            <div class="d-flex">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-secondary"><i class="ti ti-paperclip f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Notes</b></h5>
                  <p class="pc-event-title text-muted hide_all">  </p>
                  <p class="evnt_answer" >
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry.  
                  </p>
               </div>
            </div>
            <div class="d-flex hide_all">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-warning"><i class="ti ti-map-pin f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Venue</b></h5>
                  <p class="pc-event-venue text-muted"></p>
               </div>
            </div>
            <div class="d-flex hide_all">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-danger"><i class="ti ti-calendar-event f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Date</b></h5>
                  <p class="pc-event-date text-muted"></p>
               </div>
            </div>
            <div class="d-flex hide_all">
               <div class="flex-shrink-0">
                  <div class="avtar avtar-xs bg-light-primary"><i class="ti ti-file-text f-20"></i></div>
               </div>
               <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1"><b>Description</b></h5>
                  <p class="pc-event-description text-muted"></p>
               </div>
            </div>
         </div>
         <div class="modal-footer justify-content-between">
            <ul class="list-inline me-auto mb-0">
               <li class="list-inline-item align-bottom"><a href="#" id="pc_event_remove" class="avtar avtar-s btn-link-danger btn-pc-default w-sm-auto"><i class="ti ti-trash f-18"></i></a></li>
               <li class="list-inline-item align-bottom"><a href="#" id="pc_event_edit" class="avtar avtar-s btn-link-success btn-pc-default"><i class="ti ti-edit-circle f-18"></i></a></li>
            </ul>
            <div class="flex-grow-1 text-end"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button></div>
         </div>
      </div>
   </div>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="calendar-add_edit_event">
   <div class="offcanvas-header justify-content-between">
      <h3 class="f-w-600 text-truncate mb-0">Add Events</h3>
      <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default" data-bs-dismiss="offcanvas"><i class="ti ti-x f-18"></i></a>
   </div>
   <div class="offcanvas-body">
      <form id="pc-form-event" novalidate>
         <div class="half_event">
            <label class="form-label">Event Title</label> 
            <input type="text" class="form-control" placeholder="Enter Event Title">
         </div>
         <div class="half_event half_event_2">
            <label class="form-label">Event Type</label> 
            <div class="dropdown-container">
               <input type="text" class="dropdown-input form-control" id="pc-e-title" placeholder="Enter Event Type">
               <div class="dropdown-list">
                  <div>ACCOMMODATION</div>
                  <div>ALARM</div>
                  <div>CASTING</div>
                  <div>DIRECT JOB</div>
                  <div>DIRECT OPTION</div>
                  <div>FITTING</div>
                  <div>FITTING OPTION</div>
                  <div>GO & SEE</div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <div class="half_event">
            <label class="form-label">Start Date</label>
            <input type="date" class="form-control" id="pc-e-venue" placeholder="Enter event venue">
         </div>
         <div class=" half_event">
            <label class="form-label">End Date</label>
            <input type="date" class="form-control" id="pc-e-venue" placeholder="Enter event venue">
         </div>
         <div class="clear"></div>
         <div class="half_event">
            <label class="form-label">Client Name</label>
            <div class="dropdown-container">
               <input type="text" class="dropdown-input form-control" id="pc-e-title" placeholder="Enter Event Type">
               <div class="dropdown-list">
                  <div>John Smith</div>
                  <div>Jane Doe</div>
                  <div>Michael Johnson</div>
                  <div>Emily Davis</div>
                  <div>William Brown</div>
                  <div>Olivia Wilson</div>
                  <div>James Taylor</div>
                  <div>Sophia Anderson</div>
                  <div>Benjamin Thomas</div>
                  <div>Isabella Martinez</div>
               </div>
            </div>
         </div>
         <div class="half_event">
            <label class="form-label">Talent Name</label>
            <div class="dropdown-container">
               <input type="text" class="dropdown-input form-control" id="pc-e-title" placeholder="Enter Event Type">
               <div class="dropdown-list">
                  <div>John Smith</div>
                  <div>Jane Doe</div>
                  <div>Michael Johnson</div>
                  <div>Emily Davis</div>
                  <div>William Brown</div>
                  <div>Olivia Wilson</div>
                  <div>James Taylor</div>
                  <div>Sophia Anderson</div>
                  <div>Benjamin Thomas</div>
                  <div>Isabella Martinez</div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <div class="clear"></div>
         <div class="half_event_1_1 half_event">
            <label class="form-label">Call Time</label>
            <input type="time" class="form-control"  placeholder="Enter Call Time">
         </div>
         <div class="half_event_1_1 half_event">
            <label class="form-label">Contact Person Number</label>
            <input type="text" class="form-control" placeholder="Enter Contact Person Number">
         </div>
         <div class="clear"></div>
         <div class=" half_event">
            <label class="form-label">Location</label>
            <input type="text" class="form-control" placeholder="Enter Location">
         </div>
         <div class=" half_event">
            <label class="form-label">Notes</label>
            <input type="text" class="form-control" placeholder="Enter Notes">
         </div>
         <div class="clear"></div>
         <div style="opacity: 0; height: 0px; overflow: hidden; " >
            <div class="m-0"><input type="hidden" class="form-control" id="pc-e-sdate"> <input type="hidden" class="form-control" id="pc-e-edate"></div>
            <div class="mb-3"><label class="form-label">Description</label> <textarea class="form-control" placeholder="Enter event description" rows="3" id="pc-e-description"></textarea></div>
            <div class="mb-3">
               <label class="form-label">Type</label> 
               <select class="form-select" id="pc-e-type">
                  <option value="empty" selected="selected">Type</option>
                  <option value="event-primary">Primary</option>
                  <option value="event-secondary">Secondary</option>
                  <option value="event-success">Success</option>
                  <option value="event-danger">Danger</option>
                  <option value="event-warning">Warning</option>
                  <option value="event-info">Info</option>
               </select>
            </div>
            <div class="row justify-content-end">
               <div class="col-auto"><button id="pc_event_add" type="button" class="btn btn-secondary" data-pc-action="add"><span id="pc-e-btn-text"><i class="align-text-bottom me-1 ti ti-calendar-plus"></i> Add</span></button></div>
            </div>
         </div>
         <div class="clear"></div>
         <a class="ad_evnt_btn" href="">Add Events</a>
         <div class="clear"></div>
      </form>
   </div>
</div>
@endsection

@section('scripts')
 <script>
   const CLIENTS = [
     { name: "Aarav Shah",        img: "https://i.pravatar.cc/100?img=12" },
     { name: "Isabella Rossi",    img: "https://i.pravatar.cc/100?img=5"  },
     { name: "Noah Williams",     img: "https://i.pravatar.cc/100?img=20" },
     { name: "Mia Chen",          img: "https://i.pravatar.cc/100?img=32" },
     { name: "Liam Patel",        img: "https://i.pravatar.cc/100?img=41" },
     { name: "Olivia García",     img: "https://i.pravatar.cc/100?img=36" },
     { name: "Ethan Müller",      img: "https://i.pravatar.cc/100?img=15" },
     { name: "Sofia Costa",       img: "https://i.pravatar.cc/100?img=7"  },
     { name: "Arjun Kapoor",      img: "https://i.pravatar.cc/100?img=45" },
     { name: "Zara Khan",         img: "https://i.pravatar.cc/100?img=14" },
     { name: "Daniel Smith",      img: "https://i.pravatar.cc/100?img=2"  },
     { name: "Priya Nair",        img: "https://i.pravatar.cc/100?img=25" },
     { name: "Lucas Silva",       img: "https://i.pravatar.cc/100?img=54" },
     { name: "Amelia Brown",      img: "https://i.pravatar.cc/100?img=30" },
     { name: "Harper Davis",      img: "https://i.pravatar.cc/100?img=60" }
   ];
   
   const $ = sel => document.querySelector(sel);
   const create = (tag, props={}) => Object.assign(document.createElement(tag), props);
   const input = $("#client-search");
   const list  = $("#client-list");
   const clearBtn = $("#clear-btn");
   const selected = $("#selected");
   
   let activeIndex = -1;
   let currentItems = [];
   
   function debounce(fn, wait=150){
     let t; return (...args)=>{ clearTimeout(t); t=setTimeout(()=>fn(...args), wait); };
   }
   
   function filterClients(query){
     const q = query.trim().toLowerCase();
     if(!q) return [];
     return CLIENTS.filter(c => c.name.toLowerCase().includes(q)).slice(0, 8);
   }
   
   function highlight(text, query){
     const q = query.trim().replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
     if(!q) return text;
     return text.replace(new RegExp(q, "gi"), m => `<mark>${m}</mark>`);
   }
   
   function openList(){
     list.classList.add("open");
     input.setAttribute("aria-expanded", "true");
   }
   function closeList(){
     list.classList.remove("open");
     input.setAttribute("aria-expanded", "false");
     activeIndex = -1;
     [...list.children].forEach(li => li.setAttribute("aria-selected","false"));
   }
   
   function renderList(items, query){
     list.innerHTML = "";
     currentItems = items;
   
     if(items.length === 0){
       list.innerHTML = `<li class="empty" role="option" aria-disabled="true">No results</li>`;
       openList();
       return;
     }
   
     for(const [i, c] of items.entries()){
       const li = create("li", {
         className: "option",
         role: "option",
         tabIndex: -1,
         "aria-selected": "false"
       });
   
       const img = create("img", { className:"avatar", src:c.img, alt:`${c.name} avatar` });
       img.addEventListener("error", () => { img.style.display = "none"; });
   
       const box = create("div");
       box.innerHTML = `<div class="name">${highlight(c.name, query)}</div>`;
   
       li.append(img, box);
       li.addEventListener("mouseenter", () => setActive(i));
       li.addEventListener("mouseleave", () => setActive(-1));
       li.addEventListener("click", () => choose(i));
   
       list.appendChild(li);
     }
     openList();
   }
   
   function setActive(i){
     const options = [...list.querySelectorAll(".option")];
     options.forEach(o => o.setAttribute("aria-selected","false"));
     activeIndex = i;
     if(i >= 0 && options[i]){
       options[i].setAttribute("aria-selected","true");
       options[i].scrollIntoView({ block:"nearest" });
     }
   }
   
   function choose(i){
     if(i < 0 || !currentItems[i]) return;
     const c = currentItems[i];
     input.value = c.name;
     closeList();
     showSelected(c);
   }
   
   function showSelected(c){
     selected.hidden = false;
     selected.innerHTML = `
       <img src="${c.img}" alt="" class="avatar" style="width:28px;height:28px">
       <span>Selected: <strong>${c.name}</strong></span>
     `;
   }
   
   input.addEventListener("input", debounce(e => {
     const q = e.target.value;
     if(q.trim().length === 0){
       closeList();
       return;
     }
     renderList(filterClients(q), q);
   }, 120));
   
   input.addEventListener("focus", () => {
     if(input.value.trim()){
       renderList(filterClients(input.value), input.value);
     }
   });
   
   input.addEventListener("keydown", e => {
     const max = currentItems.length - 1;
     if(e.key === "ArrowDown"){
       e.preventDefault();
       if(!list.classList.contains("open")) renderList(filterClients(input.value), input.value);
       setActive(Math.min(max, activeIndex + 1));
     } else if(e.key === "ArrowUp"){
       e.preventDefault();
       setActive(Math.max(-1, activeIndex - 1));
     } else if(e.key === "Enter"){
       if(list.classList.contains("open") && activeIndex >= 0){
         e.preventDefault(); choose(activeIndex);
       }
     } else if(e.key === "Escape"){
       closeList();
     }
   });
   
   document.addEventListener("click", (e) => {
     if(!e.target.closest(".search")) closeList();
   });
   
   clearBtn.addEventListener("click", () => {
     input.value = "";
     input.focus();
     closeList();
     selected.hidden = true;
     selected.textContent = "";
   });
</script>
<script>
   document.querySelectorAll('.dropdown-container').forEach(container => {
       const input = container.querySelector('.dropdown-input');
       const list = container.querySelector('.dropdown-list');
       const options = list.querySelectorAll('div');
   
       input.addEventListener('focus', () => {
           list.style.display = 'block';
       });
   
       input.addEventListener('input', () => {
           const filter = input.value.toLowerCase();
           options.forEach(option => {
               option.style.display = option.textContent.toLowerCase().includes(filter) ? '' : 'none';
           });
       });
   
       options.forEach(option => {
           option.addEventListener('click', () => {
               input.value = option.textContent;
               list.style.display = 'none';
           });
       });
   
       document.addEventListener('click', (e) => {
           if (!container.contains(e.target)) {
               list.style.display = 'none';
           }
       });
   });
</script>
<script>
   document.querySelectorAll('.dropdown-btn').forEach(btn => {
       btn.addEventListener('click', function() {
           // Close other dropdowns
           document.querySelectorAll('.dropdown-content').forEach(content => {
               if (content !== this.nextElementSibling) {
                   content.style.display = 'none';
               }
           });
           // Toggle current dropdown
           let content = this.nextElementSibling;
           content.style.display = content.style.display === 'block' ? 'none' : 'block';
       });
   });
   
   // Close dropdown when clicking outside
   document.addEventListener('click', function(e) {
       if (!e.target.closest('.dropdown')) {
           document.querySelectorAll('.dropdown-content').forEach(content => {
               content.style.display = 'none';
           });
       }
   });
</script>
@endsection

