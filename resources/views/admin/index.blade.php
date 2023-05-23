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
                        <a href="{{ route('user.index') }}" class="side-nav-link">
                            <i class="dripicons-user-group"></i>
                            <span> Manage Users </span>
                        </a>
                    </li>
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
                            <i class="mdi mdi-offer"></i>
                            <span> Offer </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('about.index') }}" class="side-nav-link">
                            <i class="uil uil-sort-amount-up"></i>
                            <span> About Page Update </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <!-- Standard modal -->
                        <a class="side-nav-link" data-bs-toggle="modal" data-bs-target="#standard-modal">
                            <i class="uil uil-fast-mail"></i>
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
                <div class="content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card widget-inline">
                                <div class="card-body p-0">
                                    <div class="row g-0">
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body text-center">
                                                    <i class="dripicons-briefcase text-muted"
                                                        style="font-size: 24px;"></i>
                                                    <h3><span>29</span></h3>
                                                    <p class="text-muted font-15 mb-0">Total Projects</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-3">
                                            <div class="card shadow-none m-0 border-start">
                                                <div class="card-body text-center">
                                                    <i class="dripicons-checklist text-muted"
                                                        style="font-size: 24px;"></i>
                                                    <h3><span>715</span></h3>
                                                    <p class="text-muted font-15 mb-0">Total Tasks</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-3">
                                            <div class="card shadow-none m-0 border-start">
                                                <div class="card-body text-center">
                                                    <i class="dripicons-user-group text-muted"
                                                        style="font-size: 24px;"></i>
                                                    <h3><span>31</span></h3>
                                                    <p class="text-muted font-15 mb-0">Members</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-xl-3">
                                            <div class="card shadow-none m-0 border-start">
                                                <div class="card-body text-center">
                                                    <i class="dripicons-graph-line text-muted"
                                                        style="font-size: 24px;"></i>
                                                    <h3><span>93%</span> <i class="mdi mdi-arrow-up text-success"></i>
                                                    </h3>
                                                    <p class="text-muted font-15 mb-0">Productivity</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div> <!-- end row -->
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mb-4">Project Status</h4>

                                    <div class="my-4 chartjs-chart" style="height: 202px;">
                                        <canvas id="project-status-chart" data-colors="#10c469,#536de6,#ff5b5b"></canvas>
                                    </div>

                                    <div class="row text-center mt-2 py-2">
                                        <div class="col-4">
                                            <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                                            <h3 class="fw-normal">
                                                <span>64%</span>
                                            </h3>
                                            <p class="text-muted mb-0">Completed</p>
                                        </div>
                                        <div class="col-4">
                                            <i class="mdi mdi-trending-down text-primary mt-3 h3"></i>
                                            <h3 class="fw-normal">
                                                <span>26%</span>
                                            </h3>
                                            <p class="text-muted mb-0"> In-progress</p>
                                        </div>
                                        <div class="col-4">
                                            <i class="mdi mdi-trending-down text-danger mt-3 h3"></i>
                                            <h3 class="fw-normal">
                                                <span>10%</span>
                                            </h3>
                                            <p class="text-muted mb-0"> Behind</p>
                                        </div>
                                    </div>
                                    <!-- end row-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mb-3">Tasks</h4>

                                    <p><b>107</b> Tasks completed out of 195</p>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                                class="text-body">Coffee detail page - Main Page</a>
                                                        </h5>
                                                        <span class="text-muted font-13">Due in 3 days</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Status</span> <br />
                                                        <span class="badge badge-warning-lighten">In-progress</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Assigned to</span>
                                                        <h5 class="font-14 mt-1 fw-normal">Logan R. Cohn</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Total time spend</span>
                                                        <h5 class="font-14 mt-1 fw-normal">3h 20min</h5>
                                                    </td>
                                                    <td class="table-action" style="width: 90px;">
                                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                                class="mdi mdi-pencil"></i></a>
                                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                                class="text-body">Drinking bottle graphics</a></h5>
                                                        <span class="text-muted font-13">Due in 27 days</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Status</span> <br />
                                                        <span class="badge badge-danger-lighten">Outdated</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Assigned to</span>
                                                        <h5 class="font-14 mt-1 fw-normal">Jerry F. Powell</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Total time spend</span>
                                                        <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                                    </td>
                                                    <td class="table-action" style="width: 90px;">
                                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                                class="mdi mdi-pencil"></i></a>
                                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                                class="text-body">App design and development</a></h5>
                                                        <span class="text-muted font-13">Due in 7 days</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Status</span> <br />
                                                        <span class="badge badge-success-lighten">Completed</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Assigned to</span>
                                                        <h5 class="font-14 mt-1 fw-normal">Scot M. Smith</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Total time spend</span>
                                                        <h5 class="font-14 mt-1 fw-normal">78h 05min</h5>
                                                    </td>
                                                    <td class="table-action" style="width: 90px;">
                                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                                class="mdi mdi-pencil"></i></a>
                                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                                class="text-body">Poster illustation design</a></h5>
                                                        <span class="text-muted font-13">Due in 5 days</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Status</span> <br />
                                                        <span class="badge badge-warning-lighten">In-progress</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Assigned to</span>
                                                        <h5 class="font-14 mt-1 fw-normal">John P. Ritter</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Total time spend</span>
                                                        <h5 class="font-14 mt-1 fw-normal">26h 58min</h5>
                                                    </td>
                                                    <td class="table-action" style="width: 90px;">
                                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                                class="mdi mdi-pencil"></i></a>
                                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mb-4">Tasks Overview</h4>

                                    <div dir="ltr">
                                        <div class="mt-3 chartjs-chart" style="height: 320px;">
                                            <canvas id="task-area-chart" data-bgColor="#536de6"
                                                data-borderColor="#536de6"></canvas>
                                        </div>
                                    </div>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->


                    <div class="row">
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mb-3">Recent Activities</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-start">
                                                            <img class="me-2 rounded-circle"
                                                                src="assets/images/users/avatar-2.jpg" width="40"
                                                                alt="Generic placeholder image">
                                                            <div>
                                                                <h5 class="mt-0 mb-1">Soren Drouin<small
                                                                        class="fw-normal ms-3">18 Jan 2019 11:28
                                                                        pm</small></h5>
                                                                <span class="font-13">Completed "Design new
                                                                    idea"...</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Project</span> <br />
                                                        <p class="mb-0">Hyper Mockup</p>
                                                    </td>
                                                    <td class="table-action" style="width: 50px;">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle arrow-none card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <!-- item-->
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Settings</a>
                                                                <!-- item-->
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Action</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-start">
                                                            <img class="me-2 rounded-circle"
                                                                src="assets/images/users/avatar-6.jpg" width="40"
                                                                alt="Generic placeholder image">
                                                            <div>
                                                                <h5 class="mt-0 mb-1">Anne Simard<small
                                                                        class="fw-normal ms-3">18 Jan 2019 11:09
                                                                        pm</small></h5>
                                                                <span class="font-13">Assigned task "Poster illustation
                                                                    design"...</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Project</span> <br />
                                                        <p class="mb-0">Hyper Mockup</p>
                                                    </td>
                                                    <td class="table-action" style="width: 50px;">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle arrow-none card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <!-- item-->
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Settings</a>
                                                                <!-- item-->
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Action</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-start">
                                                            <img class="me-2 rounded-circle"
                                                                src="assets/images/users/avatar-3.jpg" width="40"
                                                                alt="Generic placeholder image">
                                                            <div>
                                                                <h5 class="mt-0 mb-1">Nicolas Chartier<small
                                                                        class="fw-normal ms-3">15 Jan 2019 09:29
                                                                        pm</small></h5>
                                                                <span class="font-13">Completed "Drinking bottle
                                                                    graphics"...</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Project</span> <br />
                                                        <p class="mb-0">Web UI Design</p>
                                                    </td>
                                                    <td class="table-action" style="width: 50px;">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle arrow-none card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <!-- item-->
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Settings</a>
                                                                <!-- item-->
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Action</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-start">
                                                            <img class="me-2 rounded-circle"
                                                                src="assets/images/users/avatar-4.jpg" width="40"
                                                                alt="Generic placeholder image">
                                                            <div>
                                                                <h5 class="mt-0 mb-1">Gano Cloutier<small
                                                                        class="fw-normal ms-3">10 Jan 2019 08:36
                                                                        pm</small></h5>
                                                                <span class="font-13">Completed "Design new
                                                                    idea"...</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Project</span> <br />
                                                        <p class="mb-0">UBold Admin</p>
                                                    </td>
                                                    <td class="table-action" style="width: 50px;">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle arrow-none card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <!-- item-->
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Settings</a>
                                                                <!-- item-->
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Action</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-start">
                                                            <img class="me-2 rounded-circle"
                                                                src="assets/images/users/avatar-5.jpg" width="40"
                                                                alt="Generic placeholder image">
                                                            <div>
                                                                <h5 class="mt-0 mb-1">Francis Achin<small
                                                                        class="fw-normal ms-3">08 Jan 2019 12:28
                                                                        pm</small></h5>
                                                                <span class="font-13">Assigned task "Hyper app
                                                                    design"...</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted font-13">Project</span> <br />
                                                        <p class="mb-0">Website Mockup</p>
                                                    </td>
                                                    <td class="table-action" style="width: 50px;">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle arrow-none card-drop"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <!-- item-->
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Settings</a>
                                                                <!-- item-->
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Action</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->

                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mb-3">Your Calendar</h4>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div data-provide="datepicker-inline" data-date-today-highlight="true"
                                                class="calendar-widget"></div>
                                        </div> <!-- end col-->
                                        <div class="col-md-5">
                                            <ul class="list-unstyled">
                                                <li class="mb-4">
                                                    <p class="text-muted mb-1 font-13">
                                                        <i class="mdi mdi-calendar"></i> 7:30 AM - 10:00 AM
                                                    </p>
                                                    <h5>Meeting with BD Team</h5>
                                                </li>
                                                <li class="mb-4">
                                                    <p class="text-muted mb-1 font-13">
                                                        <i class="mdi mdi-calendar"></i> 10:30 AM - 11:45 AM
                                                    </p>
                                                    <h5>Design Review - Hyper Admin</h5>
                                                </li>
                                                <li class="mb-4">
                                                    <p class="text-muted mb-1 font-13">
                                                        <i class="mdi mdi-calendar"></i> 12:15 PM - 02:00 PM
                                                    </p>
                                                    <h5>Setup Github Repository</h5>
                                                </li>
                                                <li>
                                                    <p class="text-muted mb-1 font-13">
                                                        <i class="mdi mdi-calendar"></i> 5:30 PM - 07:00 PM
                                                    </p>
                                                    <h5>Meeting with Design Studio</h5>
                                                </li>
                                            </ul>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->

                    </div>
                    <!-- end row-->

                </div> <!-- End Content -->
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
    <script src="{{ asset('admin/js/pages/demo.dashboard.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/Chart.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- third party js ends -->
    <script>
        !(function(o) {
            "use strict";

            function t() {
                (this.$body = o("body")), (this.charts = []);
            }
            (t.prototype.respChart = function(r, a, e, n) {
                (Chart.defaults.global.defaultFontColor = "#8391a2"),
                (Chart.defaults.scale.gridLines.color = "#8391a2");
                var i = r.get(0).getContext("2d"),
                    s = o(r).parent();
                return (function() {
                    var t;
                    switch ((r.attr("width", o(s).width()), a)) {
                        case "Line":
                            t = new Chart(i, {
                                type: "line",
                                data: e,
                                options: n
                            });
                            break;
                        case "Bar":
                            t = new Chart(i, {
                                type: "bar",
                                data: e,
                                options: n
                            });
                            break;
                        case "Doughnut":
                            t = new Chart(i, {
                                type: "doughnut",
                                data: e,
                                options: n
                            });
                    }
                    return t;
                })();
            }),
            (t.prototype.initCharts = function() {
                var t,
                    r,
                    a,
                    e = [];
                return (
                    0 < o("#task-area-chart").length &&
                    ((t = {
                            labels: [
                                "Sprint 1",
                                "Sprint 2",
                                "Sprint 3",
                                "Sprint 4",
                                "Sprint 5",
                                "Sprint 6",
                                "Sprint 7",
                                "Sprint 8",
                                "Sprint 9",
                                "Sprint 10",
                                "Sprint 11",
                                "Sprint 12",
                                "Sprint 13",
                                "Sprint 14",
                                "Sprint 15",
                                "Sprint 16",
                                "Sprint 17",
                                "Sprint 18",
                                "Sprint 19",
                                "Sprint 20",
                                "Sprint 21",
                                "Sprint 22",
                                "Sprint 23",
                                "Sprint 24",
                            ],
                            datasets: [{
                                label: "This year",
                                backgroundColor: o("#task-area-chart").data("bgcolor") ||
                                    "#727cf5",
                                borderColor: o("#task-area-chart").data("bordercolor") ||
                                    "#727cf5",
                                data: [
                                    16, 44, 32, 48, 72, 60, 84, 64, 78, 50, 68,
                                    34, 26, 44, 32, 48, 72, 60, 74, 52, 62, 50,
                                    32, 22,
                                ],
                            }, ],
                        }),
                        e.push(
                            this.respChart(o("#task-area-chart"), "Bar", t, {
                                maintainAspectRatio: !1,
                                legend: {
                                    display: !1
                                },
                                tooltips: {
                                    intersect: !1
                                },
                                hover: {
                                    intersect: !0
                                },
                                plugins: {
                                    filler: {
                                        propagate: !1
                                    }
                                },
                                scales: {
                                    xAxes: [{
                                        barPercentage: 0.7,
                                        categoryPercentage: 0.5,
                                        reverse: !0,
                                        gridLines: {
                                            color: "rgba(0,0,0,0.05)",
                                        },
                                    }, ],
                                    yAxes: [{
                                        ticks: {
                                            stepSize: 10,
                                            display: !1
                                        },
                                        min: 10,
                                        max: 100,
                                        display: !0,
                                        borderDash: [5, 5],
                                        gridLines: {
                                            color: "rgba(0,0,0,0)",
                                            fontColor: "#fff",
                                        },
                                    }, ],
                                },
                            })
                        )),
                    0 < o("#project-status-chart").length &&
                    ((a = {
                            labels: ["Completed", "In-progress", "Behind"],
                            datasets: [{
                                data: [64, 26, 10],
                                backgroundColor: (r = o(
                                        "#project-status-chart"
                                    ).data("colors")) ?
                                    r.split(",") :
                                    ["#0acf97", "#727cf5", "#fa5c7c"],
                                borderColor: "transparent",
                                borderWidth: "3",
                            }, ],
                        }),
                        e.push(
                            this.respChart(
                                o("#project-status-chart"),
                                "Doughnut",
                                a, {
                                    maintainAspectRatio: !1,
                                    cutoutPercentage: 80,
                                    legend: {
                                        display: !1
                                    },
                                }
                            )
                        )),
                    e
                );
            }),
            (t.prototype.init = function() {
                var r = this;
                (Chart.defaults.global.defaultFontFamily =
                    '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif'
                    ),
                (r.charts = this.initCharts()),
                o(window).on("resize", function(t) {
                    o.each(r.charts, function(t, r) {
                            try {
                                r.destroy();
                            } catch (t) {}
                        }),
                        (r.charts = r.initCharts());
                });
            }),
            (o.ChartJs = new t()),
            (o.ChartJs.Constructor = t);
        })(window.jQuery),
        (function() {
            "use strict";
            window.jQuery.ChartJs.init();
        })();
    </script>
    <script src="{{asset('admin/js/pages/demo.dashboard-projects.js')}}"></script>
    <!-- demo app -->
    <!-- end demo js-->
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
