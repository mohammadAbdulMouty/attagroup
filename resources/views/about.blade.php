@extends('home')
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css" integrity="sha256-R7DnEprdmCwOOU8N+o2WIebJ5BJoWbJuGtJcGN7w2BI=" crossorigin="anonymous" />
@endsection
@section('content')

<div class="container-about">
    <h1 class="title">Responsive Slider Timeline</h1>
    <div class="timeline">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=11;" data-year="2011">
            <div class="swiper-slide-content"><span class="timeline-year">2011</span>
              <h4 class="timeline-title">Our nice super title</h4>
              <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=12;" data-year="2012">
            <div class="swiper-slide-content"><span class="timeline-year">2012</span>
              <h4 class="timeline-title">Our nice super title</h4>
              <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=13;" data-year="2013">
            <div class="swiper-slide-content"><span class="timeline-year">2013</span>
              <h4 class="timeline-title">Our nice super title</h4>
              <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=14;" data-year="2014">
            <div class="swiper-slide-content"><span class="timeline-year">2014</span>
              <h4 class="timeline-title">Our nice super title</h4>
              <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=15;" data-year="2015">
            <div class="swiper-slide-content"><span class="timeline-year">2015</span>
              <h4 class="timeline-title">Our nice super title</h4>
              <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url(https://unsplash.it/1920/500?image=16;" data-year="2016">
            <div class="swiper-slide-content"><span class="timeline-year">2016</span>
              <h4 class="timeline-title">Our nice super title</h4>
              <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js" integrity="sha256-ShAhm+50eq3u2njxZteHrfMlg/Nh+I1EtHL289p5gIM=" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
@endsection