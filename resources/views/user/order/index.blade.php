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
        <form action="{{ route('userOrder.store', $item->id) }}" method="POST">
            @csrf
                <div class="col-md-4 col-sm-6 d-flex">
                    <div id="serv_hover" class="room">
                        <div class="room_img" style="height: 250px; width:360px">
                            <figure><img src="{{asset('admin/images/food/'.$item->image)}}"></figure>
                        </div>
                        <div class="bed_room">
                            <h3>{{ $item->food_name }}</h3>
                            <h5> Price:{{ $item->price }}</h5>
                        </div>
                        <div class="col-md-12 w=100" style="matgin-top: -60%;">
                            <label class="form-label">Quantity :</label>
                            <select name="quantity" class="btn btn-secondary dropdown-toggle" style="matgin-top: -60%;" >
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                        <div class="row-md-10" style="margin-top: 5%">
                            <button type="submit" class="book_btn">Order</button>
                        </div>
                    </div>
                </div>
        </form>
        @endforeach
        
    </div>
        <div class="row-md-10 " style="margin-left: 0%" >
            <a href="{{route('userOrder.show')}}" class="book_btn"><i class='bx bxs-plus-square' style="margin-left: 15%"></i>View Order</a>
        </div>
    </div>
</div>
@endsection
