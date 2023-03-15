<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Operate Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- third party css -->
    <link href="{{ asset('admin/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('admin/css/app-modern-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <style>

    </style>

</head>

<body class="loading" data-layout="detached"
    data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>


    <div class="navbar-custom topnav-navbar topnav-navbar">
        <div class="container-fluid">

            <!-- LOGO -->
            <a href="{{ route('admin.home') }}" class="topnav-logo" style="display:flex; align-items:center">
                <span class="topnav-logo-lg">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="Company Logo" height="50">
                </span>
                <span class="" style="color: black; font-size:35px; font-weight:700">Operate Hotel</span>
            </a>

            <ul class="list-unstyled topbar-menu float-end mb-0">

                <li class="dropdown notification-list d-xl-none">
                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-search noti-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                        <form class="p-3">
                            <input type="text" class="form-control" placeholder="Search ..."
                                aria-label="Recipient's username">
                        </form>
                    </div>
                </li>

                

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                        id="topbar-userdrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="account-user-avatar">
                            {{-- <img src="{{ asset('admin/images/user/'.Auth::user()->image) }}" alt="Image Profile" style="height: 100px; width:100px" class="rounded-circle img-thumbnail object-fit:cover"> --}}
                            <img src="{{ asset('admin/images/user/' . Auth::user()->image) }}" alt="Admin-image"
                                class="rounded-circle">
                        </span>
                        <span class="account-user-name mt-2">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
                        aria-labelledby="topbar-userdrop">


                        <!-- item-->
                        <a href="{{ route('profile.index') }}" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-circle me-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-edit me-1"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lifebuoy me-1"></i>
                            <span>Support</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline me-1"></i>
                            <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-lock-outline me-1"></i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </li>

            </ul>
            <a class="button-menu-mobile disable-btn">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div>
    </div>
    <!-- end Topbar -->

    <!-- end Topbar -->

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu leftside-menu-detached">


                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{ route('roomCategory.index') }}" class="side-nav-link">
                            <i class="uil uil-layers-alt"></i>
                            <span> Room Category </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('room.index') }}" class="side-nav-link">
                            <i class="uil uil-bed-double"></i>
                            <span> Room </span>
                        </a>
                    </li>


                    <li class="side-nav-item">
                        <a href="{{ route('food.index') }}" class="side-nav-link">
                            <i class="uil uil-food"></i>
                            <span> Food </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('serviceCategory.index') }}" class="side-nav-link">
                            <i class="uil uil-servers"></i>
                            <span> Service Category</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('service.index') }}" class="side-nav-link">
                            <i class=" uil-server"></i>
                            <span> Service </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('map.index') }}" class="side-nav-link">
                            <i class="uil-map-marker-shield"></i>
                            <span> Map </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('paymentMethod.index') }}" class="side-nav-link">
                            <i class="uil-usd-square"></i>
                            <span> Payment Method </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('payment.index') }}" class="side-nav-link">
                            <i class="uil-dollar-alt"></i>
                            <span> Payment </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('order.index') }}" class="side-nav-link">
                            <i class="uil-database-alt"></i>
                            <span> Order </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('adminBooking.index') }}" class="side-nav-link">
                            <i class="uil-book-open"></i>
                            <span> Booking </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ route('offer.index') }}" class="side-nav-link">
                            <i class="uil-book-open"></i>
                            <span> Offer </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('about.index') }}" class="side-nav-link">
                            <i class="uil-book-open"></i>
                            <span> About Page Update </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <!-- Standard modal -->
                        <a class="side-nav-link" data-bs-toggle="modal" data-bs-target="#standard-modal">
                            <i class="uil-book-open"></i>
                            <span>Mail</span>
                    </a>
                    </li>

                </ul>


                <!-- end Help Box -->
                <!-- End Sidebar -->

                <div class="clearfix"></div>
                <!-- Sidebar -left -->

            </div>
            <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog"
                aria-labelledby="standard-modalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('mail.send') }}" method="POST" enctype="multipart/form-data"
                                class="row g-3">
                                @csrf
                                <div class="col-md-12">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" name="subject" class="form-control" id="subject"
                                        required>
                                </div>
                                <div class="row-12">
                                    <label for="message" class="form-label ">Message</label>
                                    <textarea name="message" class="form-control" id="" cols="30" rows="5" required></textarea>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary px-5">Send</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- Left Sidebar End -->

            <div class="content-page">
                @yield('content')
            </div>
            <!-- content-page -->

        </div> <!-- end wrapper-->
    </div>
    <!-- END Container -->

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->


    <!-- bundle -->
    <script src="{{ asset('admin/js/vendor.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ asset('admin/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ asset('admin/js/pages/demo.dashboard.js') }}"></script>
    <!-- end demo js-->
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
