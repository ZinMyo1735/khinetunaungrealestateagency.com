@extends('layouts.app')

@section('content')

<div class="click-closed"></div>
<!--/ Form Search Start /-->
<div class="box-collapse">
  <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
  </div>
  <span class="close-box-collapse right-boxed ion-ios-close-empty"></span>
  <div class="box-collapse-wrap form">
    <form class="form-a" action="{{ route('propertyGrid') }}" method="get">
        @csrf
          <div class="row">
              <div class="col-md-12 mb-2">
                  <div class="form-group">
                      <label>Search By Price, Location and Texts</label>
                      <input class="form-control form-control-lg form-control-a" type="text" name="key" placeholder="Search for Properties . . ." value="{{ request('key') }}"/>
                  </div>
              </div>
              <div class="col-md-12">
                  <button type="submit" class="btn btn-b">Search Property</button>
              </div>
          </div>
      </form>
  </div>
</div>
<!--/ Form Search End /-->

<!--/ Nav Start /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
  <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
      aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Khine<span class="color-b">TunAung</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
      data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('propertyGrid') }}">Property List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
          </li>
      </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block rounded-circle" data-toggle="collapse"
          data-target="#navbarTogglerDemo01" aria-expanded="false">
          <span class="fa fa-search" aria-hidden="true"></span>
      </button>
  </div>
</nav>
<!--/ Nav End /-->

<!--/ Intro Single start /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
            <h1 class="title-single">Contact US</h1>
            <span class="color-text-a">အိမ်ခြံမြေနှင့်ပက်သက်၍ အသေးစိတ်သိရှိလိုပါက 09421035084, 09253962133, 09795621147, 09250189717 သို့ ရုံးချိန်အတွင်း အသေးစိတ် စုံစမ်းမေးမြန်းနိုင်ပါသည်ခင်ဗျာ။</span>
            </div>
        </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ Contact Start /-->
<section class="contact">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
            <div class="contact-map box">
            <div id="map" class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d337.4648239070858!2d96.19554317568503!3d16.87695083646187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193cd9d3ba0c1%3A0x70fece77aef47bb4!2sKhine%20Tun%20Aung%20Real%20Estate%20Agency!5e0!3m2!1sen!2smm!4v1678984333269!5m2!1sen!2smm"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            </div>
        </div>
        <div class="col-sm-12 section-t8">
            <div class="row">
            @if(session('createSuccess'))
                <div class="alert alert-success alert-dismissible fade show ml-2 mt-2" role="alert">
                    <strong>{{ session('createSuccess') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="col-md-7">
              <form action="{{ route('create#contact') }}" method="post" class="form-a">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input type="text" name="contactName" value="{{ old('contactName') }}" class="form-control form-control-lg form-control-a @error('contactName') is-invalid @enderror" placeholder="Your Name">
                            @error('contactName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <input name="contactEmail" type="text" value="{{ old('contactEmail') }}" class="form-control form-control-lg form-control-a @error('contactEmail') is-invalid @enderror" placeholder="Your Email">
                            @error('contactEmail')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <input type="text" name="contactSubject" value="{{ old('contactSubject') }}" class="form-control form-control-lg form-control-a @error('contactSubject') is-invalid @enderror" placeholder="Subject">
                            @error('contactSubject')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <textarea class="form-control @error('contactMessage') is-invalid @enderror" name="contactMessage" cols="45" rows="8" placeholder="Message">
                                {{ old('contactMessage') }}
                            </textarea>
                            @error('contactMessage')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-a">Send Message</button> 
                    </div>
                </div>
              </form>
            </div>
            <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                <div class="icon-box-icon">
                    <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                    <h4 class="icon-title">Mail Us</h4>
                    </div>
                    <div class="icon-box-content">
                    <p class="mb-1">Email.
                        <span class="color-a"><a href="mailto:khinetunaung28@gmail.com" class="text-decoration-none"> khinetunaung28@gmail.com</a></span>
                    </p>
                    </div>
                </div>
                </div>
                <div class="icon-box section-b2">
                <div class="icon-box-icon">
                    <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                    <h4 class="icon-title">Our Office Location</h4>
                    </div>
                    <div class="icon-box-content">
                    <p class="mb-1">
                        NaWaDay Street, 35 Ward,
                        <br> North Dagon.
                    </p>
                    </div>
                </div>
                </div>
                <div class="icon-box">
                <div class="icon-box-icon">
                    <span class="ion-ios-call"></span>
                </div>
                <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                    <h4 class="icon-title">Call Us</h4>
                    </div>
                    <div class="icon-box-content">
                    <p class="mb-1">Phone 1:
                        <span class="color-a"><a href="tel:+959253962133" class="text-decoration-none"> +959 2539 62133</a></span>
                    </p>
                    <p class="mb-1">Phone 2:
                        <span class="color-a"><a href="tel:+959421035084" class="text-decoration-none"> +959 4210 35084</a></span>
                    </p>
                    <p class="mb-1">Phone 3:
                        <span class="color-a"><a href="tel:+959250189717" class="text-decoration-none"> +959 2501 89717</a></span>
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!--/ Contact End /-->

@endsection