@extends('user.include.new')
@section('content')


    <div class="content" style="margin-left:0%; margin-top:0%; margin-right:15%;">
        <div class="row" >
            <div class="col">
                <!-- Profile -->
                <div class="card bg-primary">
                    <div class="card-body profile-user-box">
                        <div class="row" style="margin-top:-15px" >
                            <div class="col-sm-8">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-lg">
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
                                       <a href="{{route('userProfile.create')}}"> <i  class="mdi mdi-account-edit me-1"></i> Edit Profile</a>
                                    </button>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                    </div> <!-- end card-body/ profile-user-box-->
                </div><!--end profile/ card -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->
                <div class="card " >
                    <div class="card-body align-items-center ">
                        <h4 class="header-title mt-0 mb-3">Seller Information</h4>
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

</div> <!-- end wrapper-->
</div>

<div class="rightbar-overlay"></div>

@endsection