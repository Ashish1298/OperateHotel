@extends('user.include.app')
@section('content')
<div class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Nearest Locations</h2>
                </div>
            </div>
        </div>
        <div class="row shadow-lg p-3 mb-5 bg-white rounded">
            @foreach($maps as $map)
            <div class="col-md-4 shadow-lg p-3 mb-5 bg-white rounded">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/map/'.$map->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <a href="{{route('user.map.show',$map->id)}}"><h3 class="card-text">{{$map->name}}</h3></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection