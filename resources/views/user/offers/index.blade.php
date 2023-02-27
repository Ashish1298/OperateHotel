@extends('user.include.app')
@section('content')
<section class="banner_main">
    @foreach ($offers as $item)
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel" style="margin-left:3%; margin-top:1%">
        <div class="carousel-inner">
            <div class="carousel-item active d-flex justify-content-center" >
                <img class="first-slide" src="{{asset('admin/images/offer/'.$item->image)}}" alt="First slide">
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection
