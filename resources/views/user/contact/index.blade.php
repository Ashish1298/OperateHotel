@extends('user.include.app')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                    <form id="request" action="{{ route('user.to.admin') }}" method="POST" class="main_form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Name" type="type" name="name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="email" name="email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus"  placeholder="Phone Number"  pattern="98[0-9]{8}" maxlength="10" autocomplete="off" name="phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" type="type" name="message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
