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
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="room.html">rooms</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gallery.html">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Food</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Offers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">contact</a>
                                    </li>
                                    <li class="dropdown profile-menu-head ">
                                        <a href="{{route('userProfile.index')}}" class="nav-link dropbtn" href="" style="border-bottom: none;">
                                            <img src="{{ asset('admin/images/user/'.Auth::user()->image) }}" alt="" style="height:45px; width:50px; left:0; margin-top:-10px " class="rounded-circle">
                                        </a>
                                        <div class="dropdown-content" style="left:0;">
                                            <a href="{{route('userProfile.index')}}">My Profile</a>
                                            <a href="#">Link 2</a>
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

        
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ asset('user/images/banner1.jpg') }}" alt="First slide">
                    <div class="container">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ asset('user/images/banner2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{ asset('user/images/banner3.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="booking_ocline">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="book_room" >
                            <h1>Book a Room Online</h1>
                            <form action="{{ route('booking.store') }}" method="POST" class="book_now">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <span>Select Room</span>
                                        <select name="room_id" class="online_book single-select">
                                            @foreach ($rooms as $room)
                                            <option class="date_cua" value="{{ $room->id }}">{{ $room ->room_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <span>Check IN</span>
                                        <img class="date_cua" src="{{ asset('user/images/date.png') }}" style="margin-right: 41px;">
                                        <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="checkIn">
                                    </div>
                                    <div class="col-md-12">
                                        <span>Check Out</span>
                                        <img class="date_cua" src="{{ asset('user/images/date.png') }}" style="margin-right: 41px;">
                                        <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="checkOut">
                                    </div>
                                    <div class="col-md-12">
                                        <span>No Of People</span>
                                        <select name="noOfPeople" placeholder ="Select Room" class="online_book single-select">
                                            <option style="color: white; background-color:#ff0000;">1</option>
                                            <option style="color: white; background-color:#ff0000;">2</option>
                                            <option style="color: white; background-color:#ff0000;">3</option>
                                            <option style="color: white; background-color:#ff0000;">4</option>
                                            <option style="color: white; background-color:#ff0000;">5</option>
                                            <option style="color: white; background-color:#ff0000;">6</option>
                                            <option style="color: white; background-color:#ff0000;">7</option>
                                            <option style="color: white; background-color:#ff0000;">8</option>
                                            <option style="color: white; background-color:#ff0000;">9</option>
                                            <option style="color: white; background-color:#ff0000;">10</option>
                                        </select>
                                    </div>
                                    <div class="row-md-10" style="margin-left: 37%">
                                        <button type="submit" class="book_btn">Book Now</button>
                                    </div>
                                    
                                </div>
                            </form>
                            <div class="row-md-10 " style="margin-left: 0%" >
                                {{-- <button href="{{route('booking.show')}}" class="book_btn">View Book</button> --}}
                                <a href="{{route('booking.show')}}" class="book_btn"><i class='bx bxs-plus-square' style="margin-left: 15%"></i>View Booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>About Us</h2>
                        <p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their
                            dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with
                            their software. Today it's seen all around the web; on templates, websites, and stock
                            designs. Use our generator to get your own, or read on for the authoritative history of
                            lorem ipsum. </p>
                        <a class="read_more" href="Javascript:void(0)"> Read More</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="{{ asset('user/images/about.png') }}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- our_room -->
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('user/images/room1.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('user/images/room2.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('user/images/room3.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('user/images/room4.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('user/images/room5.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure><img src="{{ asset('user/images/room6.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>Bed Room</h3>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our_room -->
    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('user/images/gallery1.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('user/images/gallery2.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('user/images/gallery3.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('user/images/gallery4.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('user/images/gallery5.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('user/images/gallery6.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('user/images/gallery7.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('user/images/gallery8.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Blog</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('user/images/blog1.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Bed Room</h3>
                            <span>The standard chunk </span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you
                                are </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('user/images/blog2.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Bed Room</h3>
                            <span>The standard chunk </span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you
                                are </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('user/images/blog3.jpg') }}" alt="#" /></figure>
                        </div>
                        <div class="blog_room">
                            <h3>Bed Room</h3>
                            <span>The standard chunk </span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you
                                are </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
    <!--  contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Name" type="type" name="Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="type"
                                    name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="600" height="400" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
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
            <div class="container">
                <div class="row">
                    <div class=" col-md-4">
                        <h3>Contact US</h3>
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">
                                    demo@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="about.html"> about</a></li>
                            <li><a href="room.html">Our Room</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>News letter</h3>
                        <form class="bottom_form">
                            <input class="enter" placeholder="Enter your email" type="text"
                                name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">

                            <p>
                                © 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html
                                    Templates</a>
                                <br><br>
                                Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>