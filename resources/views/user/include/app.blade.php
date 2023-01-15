<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/core/core.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropzone/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/dropify/dist/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/demo_1/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/demo_1/style2.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    apps-social-feed
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">web apps</li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                            aria-controls="emails">
                            <i class="link-icon" data-feather="mail"></i>
                            <span class="link-title">Email</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="emails">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/email/read.html" class="nav-link">Read</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/email/compose.html" class="nav-link">Compose</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="pages/apps/chat.html" class="nav-link">
                            <i class="link-icon" data-feather="message-square"></i>
                            <span class="link-title">Chat</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i data-feather="search"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown nav-apps">
                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="appsDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">Web Apps</p>
                                    <a href="javascript:;" class="text-muted">Edit</a>
                                </div>
                                <div class="dropdown-body">
                                    <div class="d-flex align-items-center apps">
                                        <a href="pages/apps/chat.html"><i data-feather="message-square"
                                                class="icon-lg"></i>
                                            <p>Chat</p>
                                        </a>
                                        <a href="pages/apps/calendar.html"><i data-feather="calendar"
                                                class="icon-lg"></i>
                                            <p>Calendar</p>
                                        </a>
                                        <a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i>
                                            <p>Email</p>
                                        </a>
                                        <a href="pages/general/profile.html"><i data-feather="instagram"
                                                class="icon-lg"></i>
                                            <p>Profile</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-messages">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="messageDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">9 New Messages</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Leonardo Payne</p>
                                                <p class="sub-text text-muted">2 min ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project status</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Carl Henson</p>
                                                <p class="sub-text text-muted">30 min ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Client meeting</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Jensen Combs</p>
                                                <p class="sub-text text-muted">1 hrs ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project updates</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Amiah Burton</p>
                                                <p class="sub-text text-muted">2 hrs ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project deadline</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Yaretzi Mayo</p>
                                                <p class="sub-text text-muted">5 hr ago</p>
                                            </div>
                                            <p class="sub-text text-muted">New record</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-notifications">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">6 New Notifications</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                        <div class="content">
                                            <p>New customer registered</p>
                                            <p class="sub-text text-muted">2 sec ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="gift"></i>
                                        </div>
                                        <div class="content">
                                            <p>New Order Recieved</p>
                                            <p class="sub-text text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="alert-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p>Server Limit Reached!</p>
                                            <p class="sub-text text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="layers"></i>
                                        </div>
                                        <div class="content">
                                            <p>Apps are ready for update</p>
                                            <p class="sub-text text-muted">5 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="download"></i>
                                        </div>
                                        <div class="content">
                                            <p>Download completed</p>
                                            <p class="sub-text text-muted">6 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle " href="#" id="profileDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div>
                                    @if (Auth::user()->profile_image == null)
                                        <img src="{{ asset('admin/images/profile/avatar-0.jpg') }}" alt="Admin"
                                            class="profile-object-fit-cover">
                                    @else
                                        <img src="{{ asset('admin/images/profile/' . Auth::user()->profile_image) }}"
                                            class="profile-object-fit-cover" alt="Admin">
                                    @endif
                                </div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        @if (Auth::user()->profile_image == null)
                                            <img src="{{ asset('admin/images/profile/avatar-0.jpg') }}"
                                                alt="Admin"
                                                class="rounded-circle p-1 profile-small profile-dropdown-object-fit-cover">
                                        @else
                                            <img src="{{ asset('admin/images/profile/' . Auth::user()->profile_image) }}"
                                                alt="Admin"
                                                class="rounded-circle p-1 profile-small profile-dropdown-object-fit-cover">
                                        @endif
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">{{ Auth::user()->name }}</p>
                                        <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <i data-feather="edit"></i>
                                                <span>Edit Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <i data-feather="key"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            
                                            <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                <i data-feather="log-out"></i>
                                                <span>Logout</span>
                                                
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">
                @yield('content')
            </div>

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('admin/vendors/core/core.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('admin/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/dropify/dist/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
    <!-- end plugin js for this page -->

    <!-- custom js for this page -->
    <script src="{{ asset('admin/js/form-validation.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('admin/js/inputmask.js') }}"></script>
    <script src="{{ asset('admin/js/select2.js') }}"></script>
    <script src="{{ asset('admin/js/typeahead.js') }}"></script>
    <script src="{{ asset('admin/js/tags-input.js') }}"></script>
    <script src="{{ asset('admin/js/dropzone.js') }}"></script>
    <script src="{{ asset('admin/js/dropify.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker.js') }}"></script>
    <script src="{{ asset('admin/js/timepicker.js') }}"></script>
    <!-- end custom js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('admin/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker.js') }}"></script>
    <!-- end custom js for this page -->
</body>

</html>
