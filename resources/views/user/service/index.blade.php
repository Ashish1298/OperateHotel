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
            <div class="col-12">
                <form action="{{ route('userService.userToAdminService') }}" method="POST">
                    @csrf
                    <div class="col-sm-6" style="margin-left: 25%; width:400px;">
                        <div id="serv_hover" class="room" style="width:400px;">
                            {{-- <div class="bed_room">
                                    <h3>{{ $item->Service_name }}</h3>
                                    <h5> Description:{{ $item->description }}</h5>
                                </div> --}}
                            <div class="col-md-12">
                                <span>Select Service</span>
                                <select name="service_id"
                                    class="online_book single-select btn btn-secondary dropdown-toggle">
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}" class="date_cua"
                                            style="color: white; background-color:#ff0000;">
                                            {{ $service->Service_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row-md-10" style="margin-top: 5%">
                                <button type="submit" class="book_btn">USE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
