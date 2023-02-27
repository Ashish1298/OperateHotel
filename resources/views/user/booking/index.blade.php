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
    <!-- third party css -->
    <link href="{{ asset('admin/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('admin/css/app-modern-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
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

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            display: block;
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
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col logo_section">
                        <div class="" style="display: block;">
                            <a><img src="{{ asset('admin/images/logo.png') }}" alt="Company Logo"
                                    style="height:70px; width:75px;  margin-top:-5px margin-left:10%; margin-rightt:10%" /></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">

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
                                    <li class="dropdown profile-menu-head ">
                                        <a href="{{ route('userProfile.index') }}" class="nav-link dropbtn"
                                            href="" style="border-bottom: none;">
                                            <img src="{{ asset('admin/images/user/' . Auth::user()->image) }}"
                                                alt=""
                                                style="height:45px; width:50px; left:0; margin-top:-10px "
                                                class="rounded-circle">
                                        </a>
                                        <div class="dropdown-content" style="left:0;">
                                            <a href="{{ route('userProfile.index') }}">My Profile</a>
                                            <a href="#">Link 2</a>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
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

    <div class="tab-content" style="margin-top: 20px; margin-right:50px; margin-left:50px;">
        <div class="tab-pane show active" id="striped-rows-preview">
            <h1>YOUR BOOKINGS</h1>
            <div class="table-responsive">
                <table class="table table-striped table-centered">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Room ID</th>
                            <th>User ID</th>
                            <th>Check In Date</th>
                            <th>Check Out Date</th>
                            <th>No of people</th>
                            <th>Action</th>
                        </tr>

                    <tbody>
                        <tr>
                            @foreach ($bookings as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->room_id }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->checkIn }}</td>
                            <td>{{ $item->checkOut }}</td>
                            <td>{{ $item->noOfPeople }}</td>
                            <td>
                                <button id="payment-button" onclick="payment({{ $item->id }})">Pay with
                                    Khalti</button>
                                <a href="{{ route('booking.delete', $item->id) }}" class="action-icon"
                                    title="delete"><i class="mdi mdi-delete"></i></button></a>
                            </td>
                        </tr>
                        @endforeach
                        </tr>

                    </tbody>
            </div> <!-- end table-responsive-->
        </div> <!-- end preview-->

    </div>
    <!--  footer -->
    <!-- end footer -->
    <!-- Javascript files-->
    <script>
        let card = document.querySelector(".profile-card"); //declearing profile card element
        card.addEventListener("click", function() { //on click on profile picture toggle hidden class from css
            console.log('hwllo');
        })
    </script>
    <script src="{{ asset('admin/js/vendor.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ asset('admin/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- third party js ends -->
    <script src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('user/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('user/js/custom.js') }}"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "{{ config('app.khalti_public_key') }}",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess(payload) {
                    // hit merchant api for initiating verfication
                    $.ajax({
                        type: "get",
                        url: "{{ route('khalti.verifyPayment') }}",
                        data: {
                            amount: payload.amount,
                            token: payload.token,
                            product_identity: payload.product_identity,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            console.log(res)
                            $.ajax({
                                url: "/payment/store",
                                type: "post",
                                data: {
                                    response: res,
                                    "_token": "{{ csrf_token() }}"
                                },
                                success: function(data) {
                                    console.log(data)
                                },
                                error: function(e) {
                                    console.log(e);
                                }
                            })
                        },
                        error: function(e) {
                            console.log(e);
                        }
                    })

                    console.log(payload);

                },
                onError(error) {
                    console.log(error);
                },
                onClose() {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        // var btn = document.getElementById("payment-button");
        // btn.onclick = function() {
        //     // minimum transaction amount must be 10, i.e 1000 in paisa.
        //     checkout.show({
        //         amount: 1000
        //     });
        // }

        function payment(id) {
            checkout.show({
                amount: 1000,
                productIdentity: id
            })
        }
    </script>

    {!! Toastr::message() !!}
</body>

</html>
