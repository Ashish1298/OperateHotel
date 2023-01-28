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

                        <div class="row" >
                            <div class="col-sm-8">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-lg">
                                            {{-- @if(Auth::user()->image == null)
                                            <img src="{{ asset('admin/images/avatar/avatar-0.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary profile-big">
                                            @else
                                            <img src="{{ asset('admin/images/user/'.Auth::user()->image) }}" alt="Admin" class="rounded-circle p-1 bg-primary profile-small">
                                            @endif --}}
                                            <img src="{{ asset('admin/images/user/'.Auth::user()->image) }}" alt="Image Profile" style="height: 100px; width:100px;" class="rounded-circle object-fit:cover">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <h4 class="mt-1 mb-1 text-white">{{Auth::user()->name}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-sm-4 mt-3">
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
                        <h4 class="header-title mt-0 mb-3">About Me</h4>
                        <p class="text-muted font-13">
                            {{ Auth::user()->bio }}
                        </p>

                        <hr/>

                        <div class="text-start">
                            <p class="text-muted"><strong>Full Name :</strong> <span class="ms-2">{{ Auth::user()->name }}</span></p>

                            <p class="text-muted"><strong>Mobile :</strong><span class="ms-2">{{ Auth::user()->phone_number }}</span></p>

                            <p class="text-muted"><strong>Email :</strong> <span class="ms-2">{{ Auth::user()->email}}</span></p>
                            <p class="text-muted"><strong>Date of Birth :</strong> <span class="ms-2">{{ Auth::user()->dateOfBirth}}</span></p>

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