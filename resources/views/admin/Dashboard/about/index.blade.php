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
                <h4 class="header-title">About</h4>
                <div>
                    <a href="{{route('about.create')}}" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>Create Info for about page</a>
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
                                        <th class="w-25">Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($abouts as $item)
                                        <tr>
                                            <td><img src="{{asset('admin/images/about/'.$item->image)}}" alt="" class="w-25"></td>
                                            <td>{{ Str::limit($item->description)}}</td>
                                            <td>
                                                <a href="{{ route('about.show',$item->id )}}" class="action-icon" title="edit"><i class="mdi mdi-pencil"></i></button></a>
                                                <a href="{{ route('about.delete',$item->id )}}" class="action-icon" title="delete"><i class="mdi mdi-delete"></i></button></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->                     
                    </div> <!-- end preview-->

                </div>
            </div>                
        </div>
    </div>

@endsection
