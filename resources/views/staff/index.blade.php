{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operate Hotel</title>
</head>
<body>
    <h1>This is Staff Dashboard</h1>
</body>
</html> --}}


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
            <a href="{{ route('staff.dashboard') }}" class="topnav-logo" style="display:flex; align-items:center">
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
                        <span class="account-user-name mt-2">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
                        aria-labelledby="topbar-userdrop">
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

        </div>
    </div>
    <!-- end Topbar -->

    <!-- end Topbar -->

    <!-- Start Content-->
    {{-- <div class="container-fluid">

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
                            <span> Orders </span>
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
    </div> --}}
    <!-- END Container -->
    <div class="tab-content" style="margin-top: 2%;">
        <div class="tab-pane show active" id="striped-rows-preview">
            <div class="table-responsive"style="margin-right: 5%; margin-right:5%;">
                <table class="table table-striped table-centered">
                    <thead>
                        <tr>
                            <th>Food</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>User Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    <tbody>
                        {{-- @for ($i = 0; $i < count($orders); $i++)
                            @php
                                $order = DB::table('food')
                                    ->where('id', $orders[$i]->food_id)
                                    ->get();
                            @endphp
                            <tr>
                                <td>{{ $order[0]->food_name }}</td>
                                <td>{{ $order[0]->price }}</td>
                                <td>{{ $orders[$i]->quantity }}</td>
                                <td>{{ $order[0]->price * $orders[$i]->quantity }}</td>
                                <td>{{ $orders[$i]->user_id }}</td>
                                <td>{{ $orders[$i]->status }}</td>
                                <td>
                                    <a href="{{ route('order.change.status', $orders[$i]->id) }}" class="action-icon"
                                        title="edit"><i class="mdi mdi-pencil"></i></button></a>
                                    <a href="{{ route('order.change.status', $orders[$i]->id) }}">change status</a>
                                    <a href="{{ route('order.delete', $orders[$i]->id) }}" class="action-icon"
                                        title="delete"><i class="mdi mdi-delete"></i></button></a>
                                </td>
                            </tr>
                        @endfor --}}

                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->food['food_name'] }}</td>
                                <td>{{ $order->food['price'] }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->user['name'] }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    <a href="{{ route('order.change.status', $order->id) }}"><i
                                            class="mdi mdi-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
            </div> <!-- end table-responsive-->

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
