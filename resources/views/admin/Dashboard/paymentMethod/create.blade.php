@extends('admin.include.app')
@section('content')
<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-body ">
                <div class="card-body d-flex align-items-center">
                <h4 class="header-title">Create PAyment Method</h4>
                </div>

                <ul class="nav nav-tabs nav-bordered mb-3">
                    <li class="nav-item">
                        <a href="#striped-rows-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                            Create
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
                                    <h5 class="mb-0 text-primary">Create Payment Method</h5>
                                </div>
                                <hr>
                                {{-- action="{{ route('brand.store') }}" --}}
                                <form  action="{{ route('paymentMethod.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="inputName" class="form-label">Payment Method Name</label>
                                        <input type="text" name="payment_method" class="form-control" id="inputName" required>
                                    </div>
                                    <div class="row-12">
                                        <label for="inputAddress" class="form-label ">Description</label>
                                        <textarea class="form-control" id="inputDescription" name="description" placeholder="Description..." rows="3"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary px-5">Create</button>
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
