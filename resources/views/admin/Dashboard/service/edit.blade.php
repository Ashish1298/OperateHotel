@extends('admin.include.app')
@section('content')
<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-body ">
                <div class="card-body d-flex align-items-center">
                <h4 class="header-title">Update Room </h4>
                </div>

                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <a href="#striped-rows-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Update
                        </a>
                    </li>
                </ul> <!-- end nav-->
                <div class="row">
                    <div class="col-xl-7 mx-auto">
                        <div class="card border-top border-0 border-4 border-primary">
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-plus-square me-1 font-22 text-primary"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary">Update Room</h5>
                                </div>
                                <hr>
                                {{-- action="{{ route('brand.store') }}" --}}
                                <form  action="{{ route('service.edit', $services->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                                    @csrf
                                    <div class="col-md-12 w=100">
                                        <label class="form-label">Select Service type </label>
                                        <select name="service_type" class="single-select">
                                            @foreach ($serviceCategorys as $serviceCategory)
                                            <option value="{{ $serviceCategory -> id }}" @if ($services->service_type == $serviceCategory->id ) selected @endif>{{ $serviceCategory -> Service_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12 w=100">
                                        <label class="form-label">Select room</label>
                                        <select name="room_id" class="single-select">
                                            @foreach ($rooms as $room)
                                            <option value="{{ $room -> id }}" @if ($services->room_id == $room->id) selected @endif>{{ $room -> room_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary px-5">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</div>
@endsection
