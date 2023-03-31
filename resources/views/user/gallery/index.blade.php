@extends('user.include.app')
@section('content')
<div class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>gallery</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($rooms as $item)
            <div class="col-md-3 col-sm-6" style="height: 250px; width:360px">
                <div class="gallery_img" >
                    <figure><img src="{{asset('admin/images/room/'.$item->image)}}" /></figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
