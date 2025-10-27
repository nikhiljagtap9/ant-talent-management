<!doctype html>
<html lang="en"  >
   <!-- [Head] start -->
   <head>
      <title>ANT Talent Management</title>
      <!-- [Meta] -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <!-- [Favicon] icon -->
      <link rel="icon" href="{{ asset('assets/images/fev.png')}}" type="image/x-icon">
      <!-- [Google Font : Public Sans] icon -->
      <link href="{{ asset('assets/fonts/inter/inter.css')}}" rel="stylesheet">
      <!-- [phosphor Icons] https://phosphoricons.com/ -->
      <link rel="stylesheet" href="{{ asset('assets/fonts/phosphor/duotone/style.css')}}">
      <!-- [Tabler Icons] https://tablericons.com -->
      <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css')}}">
      <!-- [Feather Icons] https://feathericons.com -->
      <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css')}}">
      <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
      <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css')}}">
      <!-- [Material Icons] https://fonts.google.com/icons -->
      <link rel="stylesheet" href="{{ asset('assets/fonts/material.css')}}">
      <!-- [Template CSS Files] -->
      <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" id="main-style-link">
      <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css')}}">

      <!-- Cropper.js CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet">

   </head>
   <!-- [Head] end --><!-- [Body] Start -->
   <body data-pc-preset="preset-1" data-pc-sidebar-theme="dark" data-pc-header-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
      <!-- [ Pre-loader ] start -->
      <div class="loader-bg">
         <div class="pc-loader">
            <div class="loader-fill"></div>
         </div>
      </div>
      <!-- [ Pre-loader ] End --><!-- [ Sidebar Menu ] start -->
      <nav class="pc-sidebar">
         <div class="navbar-wrapper">
            <div class="m-header">
               <a href="index.php" class="b-brand text-primary">
               <img src="{{ asset('assets/images/logo_black.png')}}" alt="logo image" class="logo-lg main_logo logo_for_light">
               <img src="{{ asset('assets/images/logo_light.png')}}" alt="logo image" class="logo-lg main_logo logo_for_dark">
               </a>
            </div>
            <div class="navbar-content">
               <ul class="pc-navbar pc_navbar_new">
                  <li class="pc-item pc-caption"><label data-i18n="Navigation">Navigation</label></li>
                  <li class="pc-item">
                     <a href="{{ route('dashboard')}}" class="pc-link">
                     <span class="pc-micon"><i class="ti ti-smart-home"></i> </span>
                     <span class="pc-mtext">Dashboard</span></a>
                  </li>
                  <li class="pc-item">
                     <a href="{{ route('calendar')}}" class="pc-link">
                     <span class="pc-micon"><i class="ti ti-calendar"></i> </span>
                     <span class="pc-mtext" >calendar</span></a>
                  </li>
                  <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-user"></i> </span><span class="pc-mtext" >Talent</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{ route('talent.add') }}" >Add Talent</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('talent.view') }}" >View Talent</a></li>
                     </ul>
                  </li>
                  <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"> <i class="ti ti-building-community"></i></span><span class="pc-mtext" >companies</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="add_companies.php" >Add companies</a></li>
                        <li class="pc-item"><a class="pc-link" href="companies.php" >View companies</a></li>
                     </ul>
                  </li>
                  <li class="pc-item">
                     <a href="{{ route('contacts')}}" class="pc-link">
                     <span class="pc-micon"><i class="ti ti-book"></i> </span>
                     <span class="pc-mtext" >contacts</span></a>
                  </li>
                  <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"> <i class="ti ti-gift"></i></span><span class="pc-mtext" >packages</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="add_packages.php" >Add packages</a></li>
                        <li class="pc-item"><a class="pc-link" href="packages.php" >View packages</a></li>
                     </ul>
                  </li>
                 
                  <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"><i class="ph-duotone ph-cloud-arrow-up"></i> </span><span class="pc-mtext" >Blog</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="add_blog.php" >Add Blog</a></li>
                        <li class="pc-item"><a class="pc-link" href="view_blog.php" >View Blog</a></li>
                     </ul>
                  </li>
                  <li class="pc-item">
                     <a href="website_application.php" class="pc-link">
                     <span class="pc-micon"><i class="ti ti-clock"></i> </span>
                     <span class="pc-mtext" >Website Application</span></a>
                  </li>



                  <li class="pc-item pc-hasmenu">
                     <a href="{{ route('users')}}" class="pc-link"><span class="pc-micon"><i class="ti ti-users"></i> </span><span class="pc-mtext" >User Management</span></span></a>
                      
                  </li>


                  <!-- <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"><i class="ph-duotone ph-cloud-arrow-up"></i> </span><span class="pc-mtext" data-i18n="File Upload">File upload</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#" data-i18n="Dropzone">Dropzone</a></li>
                        <li class="pc-item"><a class="pc-link" href="#" data-i18n="Uppy">Uppy</a></li>
                     </ul>
                     </li> -->
               </ul>
               </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- [ Sidebar Menu ] end --><!-- [ Header Topbar ] start -->
      <header class="pc-header">
         <div class="header-wrapper">
            <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
               <ul class="list-unstyled">
                  <!-- ======= Menu collapse Icon ===== -->
                  <li class="pc-h-item pc-sidebar-collapse">
                     <a  class="pc-head-link ms-0 menu_icon_1" id="sidebar-hide"><i class="ti ti-menu-2"></i></a>
                  </li>
                  <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0" id="mobile-collapse"><i class="ti ti-menu-2"></i></a></li>
               </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto">
               <ul class="list-unstyled">
                  <li class="dropdown pc-h-item">
                     <a class="pc-head-link dropdown-toggle arrow-none m-0 trig-drp-search" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="ph-duotone ph-magnifying-glass"></i></a>
                     <div class="dropdown-menu dropdown-menu-end pc-h-dropdown drp-search">
                        <form class="px-1">
                           <div class="mb-0 d-flex align-items-center"><input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ."> <button class="btn btn-light-secondary btn-search">Search</button></div>
                        </form>
                     </div>
                  </li>
                  <!-- <li class="dropdown pc-h-item">
                     <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="ph-duotone ph-sun-dim"></i></a>
                     <div class="dropdown-menu dropdown-menu-end pc-h-dropdown"><a href="#!" class="dropdown-item" onclick="layout_change('dark')"><i class="ph-duotone ph-moon"></i> <span>Dark</span> </a><a href="#!" class="dropdown-item" onclick="layout_change('light')"><i class="ph-duotone ph-sun-dim"></i> <span>Light</span> </a> </div>
                     </li> -->
                  <li class="dropdown pc-h-item">
                     <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="ph-duotone ph-bell"></i> <span class="badge bg-danger pc-h-badge">3</span></a>
                     <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                           <h5 class="m-0">Notifications</h5>
                        </div>
                        <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 185px)">
                           <ul class="list-group list-group-flush">
                              <li class="list-group-item unread">
                                 <p class="text-span">Today</p>
                                 <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 position-relative">
                                       <img src="{{ asset('assets/images/user/avatar-2.jpg')}}" alt="user-image" class="user-avtar avtar avtar-s">
                                       <div class="position-absolute top-50 end-100 translate-middle-y pe-2"><i class="fas fa-circle text-success"></i></div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                       <div class="d-flex">
                                          <div class="flex-grow-1 me-3 position-relative">
                                             <h6 class="mb-0 text-truncate">Keefe Bond <span class="text-body">added new tags to </span>💪 Design system</h6>
                                          </div>
                                          <div class="flex-shrink-0"><span class="text-sm text-muted">2 min ago</span></div>
                                       </div>
                                       <p class="position-relative text-muted mt-1 mb-2"><br><span class="text-truncate">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span></p>
                                       <span class="badge rounded-pill bg-light-warning border border-warning me-1 mt-1">Dashboard</span>
                                    </div>
                                 </div>
                              </li>
                              <li class="list-group-item">
                                 <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 position-relative">
                                       <div class="avtar avtar-s bg-light-primary"><i class="ph-duotone ph-chats-teardrop f-18"></i></div>
                                       <div class="position-absolute top-50 end-100 translate-middle-y pe-2"><i class="fas fa-circle text-success"></i></div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                       <div class="d-flex">
                                          <div class="flex-grow-1 me-3 position-relative">
                                             <h6 class="mb-0 text-truncate">Message</h6>
                                          </div>
                                          <div class="flex-shrink-0"><span class="text-sm text-muted">1 hour ago</span></div>
                                       </div>
                                       <p class="position-relative text-muted mt-1 mb-2"><br><span class="text-truncate">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</span></p>
                                    </div>
                                 </div>
                              </li>
                              <li class="list-group-item">
                                 <div class="d-flex">
                                    <div class="flex-shrink-0">
                                       <div class="avtar avtar-s bg-light-success"><i class="ph-duotone ph-shield-checkered f-18"></i></div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                       <div class="d-flex">
                                          <div class="flex-grow-1 me-3 position-relative">
                                             <h6 class="mb-0 text-truncate">Notification</h6>
                                          </div>
                                          <div class="flex-shrink-0"><span class="text-sm text-muted">5 hour ago</span></div>
                                       </div>
                                       <p class="position-relative text-muted mt-1 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </li>
                  <li class="dropdown pc-h-item header-user-profile">
                     <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
                        <img src="{{ asset('assets/images/user/avatar-2.jpg')}}" alt="user-image" class="user-avtar"> 
                           <span class="ms-2">
                           <span class="user-name">{{ $user->name}}</span> 
                           <span class="user-desc">{{ $user->user_type}}</span>
                        </span>
                     </a>
                     <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                           <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body">
                           <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                              <ul class="list-group list-group-flush w-100">
                                 <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                       <div class="flex-shrink-0"><img src="{{ asset('assets/images/user/avatar-2.jpg')}}" alt="user-image" class="wid-50 rounded-circle"></div>
                                       <div class="flex-grow-1 mx-3">
                                          <h5 class="mb-0">Carson Darrin</h5>
                                          <a class="text-sm link-secondary" href="/cdn-cgi/l/email-protection#6f0c0e1d1c0001410b0e1d1d06012f0c00021f0e0116410600"><span class="__cf_email__" data-cfemail="8eedeffcfde1e0a0eaeffcfce7e0ceede1e3feefe0f7a0e7e1">[email&#160;protected]</span></a>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="list-group-item item-actions">
                                    <a href="#" class="dropdown-item"><span class="d-flex align-items-center"><i class="ph-duotone ph-user-circle"></i> <span>Edit profile</span> </span></a>
                                    <a href="#" class="dropdown-item"><span class="d-flex align-items-center"><i class="ph-duotone ph-bell"></i> <span>Notifications</span> </span></a>
                                    <a href="#" class="dropdown-item"><span class="d-flex align-items-center"><i class="ph-duotone ph-key"></i> <span>Change password</span> </span></a>
                                    <a href="#" class="dropdown-item"><span class="d-flex align-items-center"><i class="ph-duotone ph-gear-six"></i> <span>Settings</span></span></a>
                                 </li>
                                 <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                    @csrf
                                    <li class="list-group-item item-actions">
                                       <a href="#" class="dropdown-item d-flex align-items-center"
                                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                             <i class="ph-duotone ph-power me-2"></i>
                                             <span>Logout</span>
                                       </a>
                                    </li>
                                 </form>

                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </header>
      <!-- [ Header ] end -->