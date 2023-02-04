@extends('user.include.app')
@section('content')
<section class="banner_main">
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{ asset('user/images/banner1.jpg') }}" alt="First slide">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="{{ asset('user/images/banner2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{ asset('user/images/banner3.jpg') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="booking_ocline">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="book_room" >
                        <h1>Book a Room Online</h1>
                        <form action="{{ route('booking.store') }}" method="POST" class="book_now">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <span>Select Room</span>
                                    <select name="room_id" class="online_book single-select">
                                        @foreach ($rooms as $room)
                                        <option class="date_cua" value="{{ $room->id }}">{{ $room ->room_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <span>Check IN</span>
                                    <img class="date_cua" src="{{ asset('user/images/date.png') }}" style="margin-right: 41px;">
                                    <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="checkIn">
                                </div>
                                <div class="col-md-12">
                                    <span>Check Out</span>
                                    <img class="date_cua" src="{{ asset('user/images/date.png') }}" style="margin-right: 41px;">
                                    <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="checkOut">
                                </div>
                                <div class="col-md-12">
                                    <span>No Of People</span>
                                    <select name="noOfPeople" placeholder ="Select Room" class="online_book single-select">
                                        <option style="color: white; background-color:#ff0000;">1</option>
                                        <option style="color: white; background-color:#ff0000;">2</option>
                                        <option style="color: white; background-color:#ff0000;">3</option>
                                        <option style="color: white; background-color:#ff0000;">4</option>
                                        <option style="color: white; background-color:#ff0000;">5</option>
                                        <option style="color: white; background-color:#ff0000;">6</option>
                                        <option style="color: white; background-color:#ff0000;">7</option>
                                        <option style="color: white; background-color:#ff0000;">8</option>
                                        <option style="color: white; background-color:#ff0000;">9</option>
                                        <option style="color: white; background-color:#ff0000;">10</option>
                                    </select>
                                </div>
                                <div class="row-md-10" style="margin-left: 37%">
                                    <button type="submit" class="book_btn">Book Now</button>
                                </div>
                                
                            </div>
                        </form>
                        <div class="row-md-10 " style="margin-left: 0%" >
                            {{-- <button href="{{route('booking.show')}}" class="book_btn">View Book</button> --}}
                            <a href="{{route('booking.show')}}" class="book_btn"><i class='bx bxs-plus-square' style="margin-left: 15%"></i>View Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection