@php
    $active = Request::segment(1);
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ $active == ''?'active':''}}" >
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ $active == 'products'?'active':''}}">
        <a class="nav-link" href="{{url('/products')}}">Products</a>
        </li>
        <li class="nav-item {{ $active == 'aboutus'?'active':''}}">
        <a class="nav-link" href="{{url('/aboutus')}}">About Us</a>
        </li>
        <li class="nav-item {{ $active == 'contact'?'active':''}}">
        <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
        </li>
      </ul>
      <span class="lang">
          <a href="{{url('/lang/en')}}">EN</a> |
          <a href="{{url('/lang/tr')}}">TR</a> |
          <a href="{{url('/lang/ar')}}">AR</a>
      </span>
    </div>
  </nav>