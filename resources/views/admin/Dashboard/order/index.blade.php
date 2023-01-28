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
                <h4 class="header-title">Order</h4>
                <div>

                    <a href="{{route('order.create')}}" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>Create Order</a>
                </div>
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
                                        <th>Food</th>
                                        <th>Quantity</th>
                                        <th>User ID</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                    </tr>
                                    <tbody>
                                        @for ($i = 0; $i < count($orders); $i++)
                                            @php
                                                $order = DB::table('food')
                                                ->where('id', $orders[$i]->food_id)
                                                ->get();
                                            @endphp                                        
                                        <tr>
                                            <tr>
                                                <td>{{$order[0]->food_name}}</td>
                                                <td>{{$orders[$i]->quantity}}</td>
                                                <td>{{$orders[$i]->user_id}}</td>
                                                <td>
                                                    <a href="{{ route('order.show',$orders[$i]->id )}}" class="action-icon" title="edit"><i class="mdi mdi-pencil"></i></button></a>
                                                    <a href="{{ route('order.delete',$orders[$i]->id )}}" class="action-icon" title="delete"><i class="mdi mdi-delete"></i></button></a>
                                                </td>
                                            </tr>
                                        </tr>
                                        @endfor
                                        
                                    </tbody>
                        </div> <!-- end table-responsive-->                     
                    </div> <!-- end preview-->

                </div>
            </div>                
        </div>
    </div>

@endsection
