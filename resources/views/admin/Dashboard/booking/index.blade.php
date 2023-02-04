@extends('admin.include.app')
@section('content')
<!--start page wrapper -->

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            
        </nav>
    </div>
</div>
<!--end breadcrumb-->
<hr/>
<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-body ">
                <div class="d-flex justify-content-between align-items-center">
                <h4 class="header-title">Manage Bookings</h4>
                
                </div>

                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <a href="#striped-rows-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Preview
                        </a>
                    </li>
                </ul> <!-- end nav-->
                <div class="tab-content">
                    <div class="tab-pane show active" id="striped-rows-preview">
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
                                            @foreach($bookings as $item)
                                            <tr>
                                                <td>{{($item->id)}}</td>
                                                <td>{{($item->room_id)}}</td>
                                                <td>{{($item->user_id)}}</td>
                                                <td>{{($item->checkIn)}}</td>
                                                <td>{{($item->checkOut)}}</td>
                                                <td>{{($item->noOfPeople)}}</td>
                                                <td>
                                                    <a href="{{ route('adminBooking.delete',$item->id )}}" class="action-icon" title="delete"><i class="mdi mdi-delete"></i></button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                        </div> <!-- end table-responsive-->                     
                    </div> <!-- end preview-->

                </div>
            </div>                
        </div>
    </div>

@endsection
