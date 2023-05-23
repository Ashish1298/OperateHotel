<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Operate Hotel</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/profile-style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('user/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <style>

        .dropbtn {
            background-color: #ffffff;
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            border-bottom: 5px solid rgb(254, 0, 10);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        @media only screen and (min-width: 600px) {

            .dropbtn {
                background-color: #ff0000;
                border-radius: 50%;
                cursor: pointer;
            }
        }

        /* .hidden {
            display: none;
        } */
    </style>
</head>
<!-- body -->

<body class="main-layout">
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('user/images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img src="{{ asset('admin/images/logo.png') }}"alt="Company Logo"  style="height:70px; width:75px; left:0; margin-top:-5px " /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('userHome.index') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('userAbout1.index') }}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('userRoom.index') }}">rooms</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('userGallery.index') }}">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('userOrder.index') }}">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('userOffer.index') }}">Offers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('user.map.index') }}">Nearest Places</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('userContact.index') }}">contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('userService.index') }}">Service</a>
                                    </li>
                                    <li class="dropdown profile-menu-head ">
                                        <a href="{{route('userProfile.index')}}" class="nav-link dropbtn" href="" style="border-bottom: none;">
                                            <img src="{{ asset('admin/images/user/'.Auth::user()->image) }}" alt="" style="height:45px; width:50px; left:0; margin-top:-10px " class="rounded-circle">
                                        </a>
                                        <div class="dropdown-content" style="left:0;">
                                            <a href="{{route('userProfile.index')}}">My Profile</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        

    <!-- end contact -->

    <div class="content-page">
        @yield('content')
    </div>
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container " style="margin-right: 13%" >
                <div class="row">
                    <div class=" col-md-4">
                        <h3>Contact US</h3>
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Kathmandu</li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i>980733890</li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">OperateHotel@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li><a href="{{ route('userHome.index') }}">Home</a></li>
                            <li><a href="{{ route('userAbout1.index') }}"> about</a></li>
                            <li><a href="{{ route('userRoom.index') }}">Our Room</a></li>
                            <li><a href="{{ route('userGallery.index') }}">Gallery</a></li>
                            <li><a href="{{ route('userOffer.index') }}">Offer</a></li>
                            <li><a href="{{ route('userContact.index') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script>
        let card = document.querySelector(".profile-card"); //declearing profile card element
        card.addEventListener("click", function() { //on click on profile picture toggle hidden class from css
            console.log('hwllo');
        })
    </script>
    <script src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('user/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('user/js/custom.js') }}"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>

