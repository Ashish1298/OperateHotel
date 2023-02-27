@extends('user.include.app')
@section('content')
<div class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>{{$map->name}}</h2>
                </div>
            </div>
        </div>
        <div class="row shadow-lg p-3 mb-5 bg-white rounded">
            <div class="mapform">
                <div id="map" style="height:800px; width: 1140px;"></div>
                <script>
                    let map;

                    function initMap() {
                        map = new google.maps.Map(document.getElementById("map"), {
                            center: {
                                lat: <?php echo ($map->latitude); ?>,
                                lng: <?php echo ($map->longitude); ?>
                            },
                            zoom: 8,
                            scrollwheel: true,
                        });
                        const uluru = {
                            lat: <?php echo ($map->latitude); ?>,
                            lng: <?php echo ($map->longitude); ?>
                        };
                        let marker = new google.maps.Marker({
                            position: uluru,
                            map: map,
                            draggable: true
                        });

                    }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" type="text/javascript"></script>
            </div>
        </div>
    </div>
</div>
@endsection