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
<hr />
<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-body ">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="header-title">Manage User</h4>
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
                                        {{-- 'category_name', 'image', 'description' --}}
                                        <th>ID</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach( $users as $item)
                                    <tr>
                                        <td>{{ Str::limit($item->id)}}</td>
                                        <td>{{ Str::limit($item->name)}}</td>
                                        <td>{{ Str::limit($item->email)}}</td>
                                        <td>
                                            <a href="{{ route('serviceCategory.delete',$item->id )}}" class="action-icon" title="delete"><i class="mdi mdi-delete"></i></button></a>

                                            @if($item->isStaff == 1)
                                            <a href="" class="btn btn-success action-icon" title="Staff"><i class="mdi mdi-star"></i></button></a>

                                            @else
                                            <a href="{{ route('user.makeStaff',$item->id )}}" class="action-icon" title="Make Staff"><i class="mdi mdi-star"></i></button></a>

                                            @endif

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