@extends('user.include.app')
@section('content')
<div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Use Hotel services</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                @foreach($services as $item)
                <form action="{{ route('userOrder.store', $item->id) }}" method="POST">
                    @csrf
                        <div class="col-sm-6 " style="margin-left: 25%; height: 300px; width:400px;">
                            <div id="serv_hover" class="room" style="height: 300px; width:400px;">
                                <div class="bed_room">
                                    <h3>{{ $item->Service_name }}</h3>
                                    <h5> Description:{{ $item->description }}</h5>
                                </div>
                                <div class="row-md-10" style="margin-top: 5%">
                                    <button type="submit" class="book_btn">USE</button>
                                </div>
                            </div>
                        </div>
                </form>
                @endforeach
            </div>
            <div class="row-md-10 " style="margin-top: 30px;" >
                <a href="{{route('userOrder.show')}}" class="book_btn" style="width:800px"><i class='bx bxs-plus-square' style="margin-left: 15%"></i>My Services</a>
            </div>
        
        </div>
    </div>
@endsection
