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
               </div>
            </div>
         </div>
      </div>
      <!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
      <div class="row index_sec2" bis_skin_checked="1">
         <!-- [ Row 1 ] start -->
         <div class="col-md-3 col-xl-3" bis_skin_checked="1">
            <div class="card statistics-card-1" bis_skin_checked="1">
               <div class="card-body" bis_skin_checked="1">
                  <h6 class="mb-3">Total Talent</h6>
                  <img src="{{ asset('assets/images/widget/img-status-1.svg')}}" alt="img" class="img-fluid img-bg h-100">
                  <div class="d-flex align-items-center" bis_skin_checked="1">
                     <h3 class="f-w-300 d-flex align-items-center m-b-0">3,617</h3>
                     <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
                  <div class="righ_table_icon righ_table_icon_1">
                     <i class="ti ti-user"></i>
                  </div>
                  <p class="text-muted mb-2 text-sm mt-3">+20 in the last month</p>
                  <div class="progress" style="height: 7px" bis_skin_checked="1">
                     <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xl-3" bis_skin_checked="1">
            <div class="card statistics-card-1" bis_skin_checked="1">
               <div class="card-body" bis_skin_checked="1">
                  <h6 class="mb-3">Active Clients</h6>
                  <img src="{{ asset('assets/images/widget/img-status-1.svg')}}" alt="img" class="img-fluid img-bg">
                  <div class="d-flex align-items-center" bis_skin_checked="1">
                     <h3 class="f-w-300 d-flex align-items-center m-b-0">245</h3>
                  </div>
                  <div class="clear"></div>
                  <div class="righ_table_icon righ_table_icon_1">
                     <i class="ti ti-users"></i>
                  </div>
                  <p class="text-muted mb-2 text-sm mt-3">+5 in the last month</p>
                  <div class="progress" style="height: 7px" bis_skin_checked="1">
                     <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xl-3" bis_skin_checked="1">
            <div class="card statistics-card-1" bis_skin_checked="1">
               <div class="card-body" bis_skin_checked="1">
                  <h6 class="mb-3">Upcoming Events</h6>
                  <img src="{{ asset('assets/images/widget/img-status-1.svg')}}" alt="img" class="img-fluid img-bg">
                  <div class="d-flex align-items-center" bis_skin_checked="1">
                     <h3 class="f-w-300 d-flex align-items-center m-b-0">78</h3>
                  </div>
                  <div class="clear"></div>
                  <div class="righ_table_icon righ_table_icon_1">
                     <i class="ti ti-calendar-time"></i>
                  </div>
                  <p class="text-muted mb-2 text-sm mt-3">Next 30 days</p>
                  <div class="progress" style="height: 7px" bis_skin_checked="1">
                     <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-xl-3" bis_skin_checked="1">
            <div class="card statistics-card-1" bis_skin_checked="1">
               <div class="card-body" bis_skin_checked="1">
                  <h6 class="mb-3">Travel Booked</h6>
                  <img src="{{ asset('assets/images/widget/img-status-1.svg')}}" alt="img" class="img-fluid img-bg">
                  <div class="d-flex align-items-center" bis_skin_checked="1">
                     <h3 class="f-w-300 d-flex align-items-center m-b-0">50</h3>
                  </div>
                  <div class="clear"></div>
                  <div class="righ_table_icon righ_table_icon_1">
                     <i class="ti ti-bookmark"></i>
                  </div>
                  <p class="text-muted mb-2 text-sm mt-3">This Month</p>
                  <div class="progress" style="height: 7px" bis_skin_checked="1">
                     <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <!-- support-section start -->
         <div class="col-xl-6 col-md-12 growth_in">
            <div class="card">
               <div class="card-header">
                  <h5>Talent Growth</h5>
               </div>
               <div class="card-body">
                  <div id="account-chart"></div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-md-12">
            <div class="row">
               <div class="col-md-6">
                  <div class="card support-bar overflow-hidden">
                     <div class="card-body pb-0">
                        <h2 class="m-0 evnt_sli">Events Count For The Next 7 Days</h2>
                        <p class="mb-3 mt-3">A summary of upcoming scheduled events this week.</p>
                     </div>
                     <div id="support-chart"></div>
                     <div class="card-footer border-0 bg-primary">
                        <div class="row text-center text-white spacing_ise">
                           <div class="col">
                              <h4 class="m-0 text-white">10</h4>
                              <span>Last Week</span>
                           </div>
                           <div class="col">
                              <h4 class="m-0 text-white">15</h4>
                              <span>Current Week</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 righr_new_side">
                  <div class="card prod-p-card">
                     <div class="card-body">
                        <div class="row align-items-center m-b-0">
                           <div class="col">
                              <h6 class="m-b-5">Passports Expiring</h6>
                              <h3 class="m-b-0">12</h3>
                           </div>
                           <div class="col-auto"><i class="ph-duotone ph-calendar-x text-primary f-30"></i></div>
                        </div>
                     </div>
                  </div>
                  <div class="card prod-p-card">
                     <div class="card-body">
                        <div class="row align-items-center m-b-0">
                           <div class="col">
                              <h6 class="m-b-5">Contracts Expiring</h6>
                              <h3 class="m-b-0">98</h3>
                           </div>
                           <div class="col-auto"><i class="ph-duotone ph-calendar-x text-primary f-30"></i></div>
                        </div>
                     </div>
                  </div>
                  <div class="card prod-p-card">
                     <div class="card-body">
                        <div class="row align-items-center m-b-0">
                           <div class="col">
                              <h6 class="m-b-5">Visas Expiring</h6>
                              <h3 class="m-b-0">127</h3>
                           </div>
                           <div class="col-auto"><i class="ph-duotone ph-calendar-x text-primary f-30"></i></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-12 col-md-12">
            <div class="card table-card">
               <div class="card-header">
                  <h5>Packages Notification</h5>
               </div>
               <div class="pro-scroll" style="height: 380px; position: relative">
                  <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-hover my_tble">
                           <thead>
                              <tr>
                                 <th>Status</th>
                                 <th>Preview </th>
                                 <th>Package Name</th>
                                 <th>Created</th>
                                 <th>Talent</th>
                                 <th>Message</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <label class="badge badge bg-light-warning">Draft</label>
                                 </td>
                                 <td>
                                    <a href="" class="wrp_eye" ><i class="ti ti-eye text-success"></i></a>
                                 </td>
                                 <td>SEA female options</td>
                                 <td>Apr 10, 2025</td>
                                 <td>20</td>
                                 <td>
                                    <div class="messa_text">
                                       Lorem Ipsum is simply dummy <br>
                                       text of the printing <br> 
                                       <a class="reply_icon" href="">Reply</a>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label class="badge bg-light-success">Sent</label>
                                 </td>
                                 <td>
                                    <a href="" class="wrp_eye" ><i class="ti ti-eye text-success"></i></a>
                                 </td>
                                 <td>April 14 - Stellar Studios</td>
                                 <td>Apr 10, 2025</td>
                                 <td>20</td>
                                 <td>
                                    <div class="messa_text">
                                       Lorem Ipsum is simply dummy <br>
                                       text of the printing <br> 
                                       <a class="reply_icon" href="">Reply</a>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label class="badge badge bg-light-warning">Draft</label>
                                 </td>
                                 <td>
                                    <a href="" class="wrp_eye" ><i class="ti ti-eye text-success"></i></a>
                                 </td>
                                 <td>Hamdan stellar April 20   </td>
                                 <td>Apr 10, 2025</td>
                                 <td>20</td>
                                 <td>
                                    <div class="messa_text">
                                       Lorem Ipsum is simply dummy <br>
                                       text of the printing <br> 
                                       <a class="reply_icon" href="">Reply</a>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <label class="badge badge bg-light-warning">Draft</label>
                                 </td>
                                 <td>
                                    <a href="" class="wrp_eye" ><i class="ti ti-eye text-success"></i></a>
                                 </td>
                                 <td>SEA female options</td>
                                 <td>Apr 10, 2025</td>
                                 <td>20</td>
                                 <td>
                                    <div class="messa_text">
                                       Lorem Ipsum is simply dummy <br>
                                       text of the printing <br> 
                                       <a class="reply_icon" href="">Reply</a>
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
         <!-- support-section end --><!-- customer-section start -->
         <div class="col-xl-12 col-md-12">
            <div class="card table-card">
               <div class="card-header">
                  <h5>Upcoming Travel Plan</h5>
               </div>
               <div class="pro-scroll" style="height: 370px; position: relative">
                  <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-hover my_tble">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Entry Date </th>
                                 <th>Exit Date</th>
                                 <th>From</th>
                                 <th>To</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <img src="{{ asset('assets/images/user/avatar-4.jpg')}}" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>John Deo</h6>
                                          <p class="text-muted m-b-0">Editorial Shoot</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Tuesday, April 15, 2025</td>
                                 <td>Friday, April 17, 2025   </td>
                                 <td>10.00 AM</td>
                                 <td>12.30 PM</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <img src="{{ asset('assets/images/user/avatar-5.jpg')}}" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>John Deo</h6>
                                          <p class="text-muted m-b-0">Editorial Shoot</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Tuesday, April 15, 2025</td>
                                 <td>Friday, April 17, 2025   </td>
                                 <td>10.00 AM</td>
                                 <td>12.30 PM</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <img src="{{ asset('assets/images/user/avatar-6.jpg')}}" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>John Deo</h6>
                                          <p class="text-muted m-b-0">Editorial Shoot</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Tuesday, April 15, 2025</td>
                                 <td>Friday, April 17, 2025   </td>
                                 <td>10.00 AM</td>
                                 <td>12.30 PM</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <img src="{{ asset('assets/images/user/avatar-7.jpg')}}" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>John Deo</h6>
                                          <p class="text-muted m-b-0">Editorial Shoot</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Tuesday, April 15, 2025</td>
                                 <td>Friday, April 17, 2025   </td>
                                 <td>10.00 AM</td>
                                 <td>12.30 PM</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <img src="{{ asset('assets/images/user/avatar-1.jpg')}}" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>John Deo</h6>
                                          <p class="text-muted m-b-0">Editorial Shoot</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Tuesday, April 15, 2025</td>
                                 <td>Friday, April 17, 2025   </td>
                                 <td>10.00 AM</td>
                                 <td>12.30 PM</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-md-12">
            <div class="card table-card">
               <div class="card-header">
                  <h5>Passport Expiring</h5>
               </div>
               <div class="pro-scroll" style="height: 350px; position: relative">
                  <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Description</th>
                                 <th>Date</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>John Deo</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>Jenifer Vintage</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>William Jem</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>Jenifer Vintage</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>William Jem</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>David Jones</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-md-12">
            <div class="card table-card">
               <div class="card-header">
                  <h5>Contracts Expiring</h5>
               </div>
               <div class="pro-scroll" style="height: 350px; position: relative">
                  <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Description</th>
                                 <th>Date</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>John Deo</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>Jenifer Vintage</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>William Jem</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>Jenifer Vintage</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>William Jem</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>David Jones</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-md-12">
            <div class="card table-card">
               <div class="card-header">
                  <h5>Visa Expiring</h5>
               </div>
               <div class="pro-scroll" style="height: 350px; position: relative">
                  <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Description</th>
                                 <th>Date</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>John Deo</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>Jenifer Vintage</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>William Jem</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>Jenifer Vintage</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>William Jem</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>David Jones</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-md-12">
            <div class="card table-card">
               <div class="card-header">
                  <h5>Work Permits Expiring</h5>
               </div>
               <div class="pro-scroll" style="height: 350px; position: relative">
                  <div class="card-body p-0">
                     <div class="table-responsive">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Description</th>
                                 <th>Date</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>John Deo</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>Jenifer Vintage</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>William Jem</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>Jenifer Vintage</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>William Jem</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle" bis_skin_checked="1">
                                       <div class="d-inline-block" bis_skin_checked="1">
                                          <h6>David Jones</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td>Lorem Ipsum is simply dummy text</td>
                                 <td>Jun, 26</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <!-- customer-section end -->
      </div>
      <!-- [ Main Content ] end -->
   </div>
</div>
<!-- [ Main Content ] end -->
@endsection