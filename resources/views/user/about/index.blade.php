@extends('user.include.app')
@section('content')
<div class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="titlepage">
                    <h2>About Us</h2>
                    <p>{{ ($abouts->description) }}</p>
                    
                </div>
            </div>
            <div class="col-md-7">
                <div class="about_img">
                    <figure><img src="{{ asset('user/images/about.png') }}" alt="#" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection