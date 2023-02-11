@extends('user.include.app')
@section('content')
<div class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Order Food</h2>
                    <p>Hotels offer various types of rooms including Standard, Deluxe, Suite, Executive, Family, and Accessible rooms to accommodate different guests' needs and preferences with varying levels of amenities and services.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($foods as $item)
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="{{asset('admin/images/food/'.$item->image)}}"></figure>
                    </div>
                    <div class="bed_room">
                        <h3>{{ $item->food_name }}</h3>
                        <h5>Price: {{ $item->price }}</h5>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
