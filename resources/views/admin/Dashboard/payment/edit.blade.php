@extends('admin.include.app')
@section('content')
<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-body ">
                <div class="card-body d-flex align-items-center">
                <h4 class="header-title">Update Payment </h4>
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
                                    <h5 class="mb-0 text-primary">Update Payment</h5>
                                </div>
                                <hr>
                                {{-- action="{{ route('brand.store') }}" --}}
                                <form  action="{{ route('payment.edit', $payments->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                                    @csrf
                                    <div class="col-md-12 w=100">
                                        <label class="form-label">Select  Payment Method type </label>
                                        <select name="payment_method_id" class="single-select">
                                            @foreach ($paymentMethods as $paymentMethod)
                                            <option value="{{ $paymentMethod -> id }}" @if ($payments -> payment_method_id == $paymentMethod-> id ) selected @endif>{{ $paymentMethod -> payment_method }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12 w=100">
                                        <label class="form-label">Select room</label>
                                        <select name="room_id" class="single-select">
                                            @foreach ($rooms as $room)
                                            <option value="{{ $room -> id }}" @if ($payments-> room_id == $room-> id) selected @endif>{{ $room -> room_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="payment" class="form-label">Total Payment</label>
                                        <input type="number" name="total_payment" class="form-control" id="total_payment" required>
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
