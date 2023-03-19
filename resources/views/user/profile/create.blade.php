@extends('user.include.new')
@section('content')
<div class="card border-top border-0 border-4 border-primary" style="margin-right: 15%">
    <div class="card-body p-5">
        <div class="card-title d-flex align-items-center">
            <div><i class="bx bxs-plus-square me-1 font-22 text-primary"></i>
            </div>
            <h5 class="mb-0 text-primary">Edit Profile</h5>
        </div>
        <hr>
        {{-- action="{{ route('brand.store') }}" --}}
        <form  action="{{ route('userProfile.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="col-md-12">
                <label for="inputImage" class="form-label">Image</label>
                <input type="file" class="form-control" id="inputGroupFile04" name="image" accept=".jpg') }}, .png') }}, image/jpeg, image/png" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>
            <div class="row-12">
                <label for="inputAddress" class="form-label ">Phone Number</label>
                <input value="{{ Auth::user()->phone_number }}" name="phone_number" class="form-control" id="price" pattern="98[0-9]{8}" maxlength="10" autocomplete="off" required>
            </div>
            <div class="row-12">
                <label for="inputAddress" class="form-label ">Name</label>
                <input type="text" value="{{ Auth::user()->name }}" name="name" class="form-control" id="name" required>
            </div>
            <div class="row-12">
                <label for="inputAddress" class="form-label ">Date Of Birth</label>
                <input type="date" name="dateOfBirth" value="{{ Auth::user()->dateOfBirth }}" class="form-control" id="dateOfBirth" required>
            </div>
            <div class="row-12">
                <label for="inputAddress" class="form-label ">Bio</label>
                <textarea class="form-control" value="{{ Auth::user()->bio }}" id="inputAddress" name="bio" placeholder="Description..." rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary px-5">Edit</button>
            </div>
        </form>
    </div>
</div>     
@endsection
