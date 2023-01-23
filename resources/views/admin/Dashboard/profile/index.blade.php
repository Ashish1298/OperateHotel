@extends('admin.include.app')
@section('content')

<div class="content-page">
    <div class="content">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Profile</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 


        <div class="row">
            <div class="col-sm-12">
                <!-- Profile -->
                <div class="card bg-primary">
                    <div class="card-body profile-user-box">

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-lg">
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <h4 class="mt-1 mb-1 text-white">Michael Franklin</h4>
                                            <p class="font-13 text-white-50"> Authorised Brand Seller</p>

                                            <ul class="mb-0 list-inline text-light">
                                                <li class="list-inline-item me-3">
                                                    <h5 class="mb-1">$ 25,184</h5>
                                                    <p class="mb-0 font-13 text-white-50">Total Revenue</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-1">5482</h5>
                                                    <p class="mb-0 font-13 text-white-50">Number of Orders</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-sm-4">
                                <div class="text-center mt-sm-0 mt-3 text-sm-end">
                                    <button  type="button" class="btn btn-light">
                                       <a href="{{route('profile.create')}}"> <i  class="mdi mdi-account-edit me-1"></i> Edit Profile</a>
                                    </button>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                    </div> <!-- end card-body/ profile-user-box-->
                </div><!--end profile/ card -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->
                <div class="card ">
                    <div class="card-body align-items-center ">
                        <h4 class="header-title mt-0 mb-3">Seller Information</h4>
                        <p class="text-muted font-13">
                            Hye, I’m Michael Franklin residing in this beautiful world. I create websites and mobile apps with great UX and UI design. I have done work with big companies like Nokia, Google and Yahoo. Meet me or Contact me for any queries. One Extra line for filling space. Fill as many you want.
                        </p>

                        <hr/>

                        <div class="text-start">
                            <p class="text-muted"><strong>Full Name :</strong> <span class="ms-2">Michael A. Franklin</span></p>

                            <p class="text-muted"><strong>Mobile :</strong><span class="ms-2">(+12) 123 1234 567</span></p>

                            <p class="text-muted"><strong>Email :</strong> <span class="ms-2">coderthemes@gmail.com</span></p>

                            <p class="text-muted"><strong>Location :</strong> <span class="ms-2">USA</span></p>

                            <p class="text-muted"><strong>Languages :</strong>
                                <span class="ms-2"> English, German, Spanish </span>
                            </p>
                            <p class="text-muted mb-0" id="tooltip-container"><strong>Elsewhere :</strong>
                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Facebook"><i class="mdi mdi-facebook"></i></a>
                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Twitter"><i class="mdi mdi-twitter"></i></a>
                                <a class="d-inline-block ms-2 text-muted" data-bs-container="#tooltip-container" data-bs-placement="top" data-bs-toggle="tooltip" href="" title="Skype"><i class="mdi mdi-skype"></i></a>
                            </p>

                        </div>
                    </div>
                </div>
        <!-- end row -->
        
    </div> <!-- End Content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> ©OperateHotel.com
                </div>
                <div class="col-md-6">
                    <div class="text-md-end footer-links d-none d-md-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div> <!-- content-page -->

</div> <!-- end wrapper-->
</div>
<!-- END Container -->


<!-- Right Sidebar -->
<div class="end-bar">

<div class="rightbar-title">
<a href="javascript:void(0);" class="end-bar-toggle float-end">
    <i class="dripicons-cross noti-icon"></i>
</a>
<h5 class="m-0">Settings</h5>
</div>

<div class="rightbar-content h-100" data-simplebar>

<div class="p-3">
    <div class="alert alert-warning" role="alert">
        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
    </div>

    <!-- Settings -->
    <h5 class="mt-3">Color Scheme</h5>
    <hr class="mt-1" />

    <div class="form-check form-switch mb-1">
        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
            id="light-mode-check" checked />
        <label class="form-check-label" for="light-mode-check">Light Mode</label>
    </div>

    <div class="form-check form-switch mb-1">
        <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
            id="dark-mode-check" />
        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
    </div>

    <!-- Left Sidebar-->
    <h5 class="mt-4">Left Sidebar</h5>
    <hr class="mt-1" />

    <div class="form-check form-switch mb-1">
        <input type="checkbox" class="form-check-input" name="compact" value="fixed" id="fixed-check"
            checked />
        <label class="form-check-label" for="fixed-check">Scrollable</label>
    </div>

    <div class="form-check form-switch mb-1">
        <input type="checkbox" class="form-check-input" name="compact" value="condensed"
            id="condensed-check" />
        <label class="form-check-label" for="condensed-check">Condensed</label>
    </div>

   <div class="d-grid mt-4">
    <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

    <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
        class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase
        Now</a>
   </div>
</div> <!-- end padding-->

</div>
</div>

<div class="rightbar-overlay"></div>

@endsection