@extends('home')
@section('content')
<iframe id="maplocation" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=1,1&amp;output=embed"></iframe><br />
<div class="container">
    <div class="contact-container">
        <div class="row">
            <div class="col-md-6 img-content">
                <img src="img/envelope.svg"  class="contact-img">
            </div>
            <div class="col-md-6">
                <h3>Contact Form</h3>
                <form action="" class="form-contact">
                    <input type="text" name="name" placeholder="Name" class="form-control">
                    <input type="email" name="email" placeholder="Email" class="form-control">
                    <textarea name="subject" class="form-control" placeholder="Subject"></textarea>
                    <button class="btn-send">
                        <span>Send</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="info-container">
        <div class="row">
            <div class="col-md-6 info-content">
                <span class="address">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Address</span>
                    <p>Gazientap</p>
                </span>
                <span class="talk">
                        <i class="fas fa-phone-alt"></i>
                        <span>Lets Talks</span>
                        <p>Gazientap</p>
                </span>
                <span class="support">
                        <i class="fas fa-envelope"></i>
                        <span>General Support</span>
                        <p>info@attaGroup.com</p>
                </span>
            </div>
            <div class="col-md-6 img-content">
                <img src="img/contact.svg" alt="image contact us" class="contact-img" >
            </div>
        </div>
    </div>
</div>
@endsection

