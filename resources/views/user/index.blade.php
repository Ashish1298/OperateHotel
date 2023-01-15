@extends('user.include.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">User</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
                <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
                <input type="text" class="form-control">
            </div>

        </div>
    </div>

    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--end wrapper-->
@endsection
