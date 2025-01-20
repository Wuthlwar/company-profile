<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Pro1 Admin</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico" />

        <link rel="stylesheet" href="{{ asset('html/assets/css/backend-plugin.min.css') }}">
        <link rel="stylesheet" href="/css/backend.css?v=1.0.0">
        <link rel="stylesheet" href="{{ asset('html/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('html/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('html/assets/vendor/remixicon/fonts/remixicon.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet">
        <!-- Select2 Bootstrap 4 Theme CSS -->
        <link href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.3.2/dist/select2-bootstrap4.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.3.1/echarts.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <style>
            /* .custom-textarea{
                height: 70px!important;
            }
            .btn-danger{
                background-color: #be123c!important;
                border: 1px solid #881337;
            }
            .btn-warning{
                background-color: #eab308!important;
                border: 1px solid #ca8a04;
            }
            .card-header{
                padding: 10px!important;

            }
            .iq-sidebar{
                background: #9053c7;
                background: -webkit-linear-gradient(-135deg, #67e8f9, #c850c0);
                background: -o-linear-gradient(-135deg, #67e8f9, #c850c0);
                background: -moz-linear-gradient(-135deg, #67e8f9, #c850c0);
                background: linear-gradient(-135deg, #67e8f9, #c850c0);
                /* background-image: url('../images/4color.jpg'); */
            }

            */
            #font-s{
    /* border:1px solid #333; */
    font-size: 15px;
    color: #f8f8fa;
    font-family: "Poppins", sans-serif;
    }

    #font-f{
    /* border:1px solid #333; */
    font-size: 15px;
    color: #030303;
    font-family: "Poppins", sans-serif;
    }

    #font-b{
    border:1px solid #333;
    font-size: 15px;
    color: #080808;
    font-family: "Poppins", sans-serif;
    }

    .toast {
  max-width: 350px;
  overflow: hidden;
  background-color: #d4edda;
  color: #155724;
}

.btn-close {
  padding: 0.25rem 0.5rem;
  margin: -0.5rem -0.25rem -0.5rem auto;
}

/* Custom Pagination Styles */
.custom-pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.custom-pagination .pagination {
    margin: 0;
}

.custom-pagination .pagination .page-item {
    margin: 0 3px;
}

.custom-pagination .pagination .page-link {
    color: #333;
    background-color: transparent;
    border: 1px solid #ccc;
}

.custom-pagination .pagination .page-link:hover {
    background-color: #f2f2f2;
}

.custom-pagination .pagination .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.custom-pagination .pagination .page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: default;
    background-color: transparent;
    border-color: #ddd;
}

/* * {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
} */

/* #jobForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
} */


/* input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
} */

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}


fieldset {
      display: none;
    }
    fieldset:first-of-type {
      display: block;
    }

    .select2-selection__rendered{
       border:1px solid #333;
       height:40px;font-size:13px;
       border-radius: 10px;
    }

        </style>
    </head>
  <body class="">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

    <div class="iq-sidebar  sidebar-default " style="background-color: #e8eff1;">
          <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
              <a href="{{ url('/') }}" class="header-logo">
                  <img src="{{ asset('assets/photos/pro_1.png') }}" class="img-fluid rounded-normal " alt="logo" style="height:55px;">
              </a>
              <div class="iq-menu-bt-sidebar ml-0">
                  <i class="las la-bars wrapper-menu"></i>
              </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                    @if (Auth()->user()->role=='1' || Auth()->user()->role=='2' || Auth()->user()->role=='3')
                      <li class="{{ request()->url()==url('/admins/home')?'active':'' }}">
                          <a href="{{url('/admins/home')}}" class="svg-icon">
                              <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                              </svg>
                              <span class="ml-4">Dashboard</span>
                          </a>
                      </li>
                      @endif
                      @if ((Auth()->user()->role=='1' || Auth()->user()->role=='3') || (Auth()->user()->role=='2' && Auth()->user()->department=='MKT'))
                      <li class="">
                          <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="fas fa-people-carry"></i>
                              <span class="ml-4" style="color: #000;">Activity</span>
                              <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                              </svg>
                          </a>
                          <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class="{{  request()->url()==route('activity_type.index')?'active':'' }}">
                                  <a href="{{ route('activity_type.index') }}">
                                      <i class="las la-minus"></i><span style="color: #000;">Activity Type</span>
                                  </a>
                              </li>
                              <li class="{{  request()->url()==route('activities.index')?'active':'' }}">
                                <a href="{{ route('activities.index') }}">
                                    <i class="las la-minus"></i><span style="color: #000;">Activity</span>
                                </a>
                            </li>
                          </ul>
                      </li>
                      <li class=" ">
                          <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-comments"></i>
                              <span class="ml-4" style="color: #000;">Feedbacks</span>
                              <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                              </svg>
                          </a>
                          <ul id="sale" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                  <li class="{{  request()->url()==route('feedbacks.index')?'active':'' }}">
                                          <a href="{{ route('feedbacks.index') }}">
                                              <i class="las la-minus"></i><span style="color: #000;">Feedback</span>
                                          </a>
                                  </li>

                          </ul>
                      </li>


                      <li class=" ">
                        <a href="#support" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="las la-chalkboard-teacher" style="color: #000;font-size:20px;"></i>
                            <span class="ml-4" style="color: #000;">Our Support</span>
                            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                            </svg>
                        </a>
                        <ul id="support" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                        <a href="{{route('all_photo_gallery.index')}}">
                                            <i class="las la-photo-video"></i><span style="color: #000;">Photo Gallery</span>
                                        </a>
                                </li>
                                <li class="">
                                    <a href="{{route('knowledge_sharing.index')}}">
                                        <i class="las la-share-alt"></i><span style="color: #000;">Knowledge Sharing</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{route('frequently_asked_question.index')}}">
                                        <i class="las la-question-circle"></i><span style="color: #000;">FAQ</span>
                                    </a>
                                </li>
                        </ul>
                    </li>

                    @elseif ((Auth()->user()->role=='1' || Auth()->user()->role=='3') || (Auth()->user()->role=='2' && Auth()->user()->department=='Online'))

                    <li class=" ">
                        <a href="#support" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="las la-chalkboard-teacher" style="color: #000;font-size:20px;"></i>
                            <span class="ml-4" style="color: #000;">Our Support</span>
                            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                            </svg>
                        </a>
                        <ul id="support" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                        <a href="{{route('all_photo_gallery.index')}}">
                                            <i class="las la-photo-video"></i><span style="color: #000;">Photo Gallery</span>
                                        </a>
                                </li>
                                <li class="">
                                    <a href="{{route('knowledge_sharing.index')}}">
                                        <i class="las la-share-alt"></i><span style="color: #000;">Knowledge Sharing</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{route('frequently_asked_question.index')}}">
                                        <i class="las la-question-circle"></i><span style="color: #000;">FAQ</span>
                                    </a>
                                </li>
                        </ul>
                    </li>
                    @endif

                    @if(((Auth()->user()->role=='1' || Auth()->user()->role=='3') ||(Auth()->user()->role=='2' && Auth()->user()->department=='HR')))
                      <li class=" ">
                        <a href="#category" class="collapsed" data-toggle="collapse" aria-expanded="false">
                            <i class="las la-suitcase" style="color: #000;font-size:20px;"></i>
                            <span class="ml-4" style="color: #000;">Career</span>
                            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                            </svg>
                        </a>
                        <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                        <a href="{{route('Job_categories.index')}}">
                                            <i class="las la-minus"></i><span style="color: #000;">Job Category</span>
                                        </a>
                                </li>
                                <li class="">
                                    <a href="{{route('Job_vacant_lists.index')}}">
                                        <i class="las la-minus"></i><span style="color: #000;">Job Vacants</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{route('Job_Application_form.index')}}">
                                        <i class="las la-minus"></i><span style="color: #000;">Job Apply</span>
                                    </a>
                                </li>

                        </ul>
                    </li>
                    @endif

                    <li class=" ">
                        <a href="#acc" class="collapsed" data-toggle="collapse" aria-expanded="false">
                          <i class="fas fa-users"></i>
                            <span class="ml-4" style="color: #000;">User Accounts</span>
                            <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                            </svg>
                        </a>
                        <ul id="acc" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                        <a href="{{route('User_accounts_management.index')}}">
                                            <i class="las la-minus"></i><span style="color: #000;">User Accounts</span>
                                        </a>
                                </li>
                                @if(Auth()->user()->role=='1')
                                <li class="">
                                    <a href="{{route('Logs_tracking.index')}}">
                                        <i class="las la-minus"></i><span style="color: #000;">Logs</span>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </li>

                  </ul>
              </nav>

              <div class="p-3"></div>
          </div>
    </div>
    <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                      <i class="ri-menu-line wrapper-menu"></i>
                      <a href="{{ route('home') }}" class="header-logo">
                          <img src="{{ asset('assets/photos/pro_1.png') }}" class="img-fluid rounded-normal" alt="logo">
                          <h5 class="logo-title ml-3">Pro1 Global Home Center</h5>

                      </a>
                  </div>
                  <div class="iq-search-bar device-search">
                      <form action="#" class="searchbox">
                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                          <input type="text" class="text search-input" placeholder="Search here...">
                      </form>
                  </div>
                  <div class="d-flex align-items-center">
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-label="Toggle navigation">
                          <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="search-toggle dropdown-toggle btn border add-btn"
                                      id="dropdownMenuButton02" data-toggle="dropdown" aria-haspopup="true"
                                      aria-expanded="false">
                                      <img src="{{ asset('assets/photos/uk.png') }}" alt="img-flag"
                                          class="img-fluid image-flag mr-2" style="width:20px;">En
                                  </a>
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                      <div class="card shadow-none m-0">
                                          <div class="card-body p-3">
                                              <a class="iq-sub-card" href="#"><img
                                                      src="{{ asset('assets/photos/myanmar.png') }}" alt="img-flag"
                                                      class="img-fluid mr-2" style="width:20px;">Myanmar</a>
                                          </div>
                                      </div>
                                  </div>
                              </li>

                              <li class="nav-item nav-icon search-content">
                                  <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false">
                                      <i class="ri-search-line"></i>
                                  </a>
                                  <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                      <form action="#" class="searchbox p-2">
                                          <div class="form-group mb-0 position-relative">
                                              <input type="text" class="text search-input font-size-12"
                                                  placeholder="type here to search...">
                                              <a href="#" class="search-link"><i class="las la-search"></i></a>
                                          </div>
                                      </form>
                                  </div>
                              </li>


                              <li class="nav-item nav-icon dropdown caption-content">
                                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="{{ asset('html/assets/images/user/1.png') }}" class="img-fluid rounded" alt="user">
                                  </a>
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <div class="card shadow-none m-0">
                                          <div class="card-body p-0 text-center">
                                              <div class="media-body profile-detail text-center">
                                                  <img src="{{ asset('html/assets/images/page-img/profile-bg.jpg') }}" alt="profile-bg"
                                                      class="rounded-top img-fluid mb-4">
                                                  <img src="{{ asset('html/assets/images/user/1.png') }}" alt="profile-img"
                                                      class="rounded profile-img img-fluid avatar-70">
                                              </div>
                                              <div class="p-3">
                                                {{ Auth()->user()->department }}
                                                  <h5 class="mb-1">
                                                    {{ Auth()->user()->name }}<br>
                                                    {{ Auth()->user()->email }}<br>
                                                    @if (Auth()->user()->role=='1')
                                                    Super Admin
                                                    @elseif (Auth()->user()->role=='2')
                                                    Admin
                                                    @else
                                                    User
                                                    @endif

                                                  </h5>

                                                  <div class="d-flex align-items-center justify-content-center mt-3">
                                                      {{-- <a href="#" class="btn border mr-2">Profile</a> --}}
                                                      <a href="{{ route('logout') }}" class="btn border">Sign Out</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
     <div class="content-page">
     <div class="container-fluid">
        @yield('content')
        <!-- Page end  -->
    </div>
      </div>
    </div>
    <!-- Wrapper End-->

    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('html/assets/js/backend-bundle.min.js')}}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('html/assets/js/table-treeview.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('html/assets/js/customizer.js')}}"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{ asset('html/assets/js/chart-custom.js')}}"></script>

    <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('html/assets/js/app.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}" ></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    @yield('script')
  </body>
</html>
