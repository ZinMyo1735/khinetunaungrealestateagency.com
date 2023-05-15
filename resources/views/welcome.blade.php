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
          <a class="nav-link active" href="{{ route('welcome') }}">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('propertyGrid') }}">Property List</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('contact') }}">Contact</a>
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

  <!--/ Carousel Start /-->
  <div class="intro intro-carousel">
  
    <div id="carousel" class="owl-carousel owl-theme">
      @foreach ($banners as $b)
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('storage/'.$b->image_2) }})">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top"><b>{{ $b->location_name }}</b></p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">{{ $b->card_title_1 }} </span>
                      <br> {{ $b->card_title_2 }}</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="{{ route('propertySingleB',$b->id) }}"><span class="price-a">ရောင်းမည် | သိန်း {{ $b->price }}</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!--/ Carousel end /-->

  <!--/ Services Start /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Services</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-credit-card"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Sell</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Buy</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-home"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Build</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-center">
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
          <h4 class="mb-4">အိမ်ခြံမြေနှင့်ပက်သက်၍ အောက်ပါကိစ္စရပ်များကို လူကြီးမင်းတို့စိတ်တိုင်းကျ တိကျမှန်ကန်စွာ ဆောင်ရွက်ပေးနေပါသည်။</h4>
          <h5><i class="fa fa-check color-b mr-3 mb-2"></i> အရောင်းအဝယ်ပြုလုပ်ပေးခြင်း</h5>
          <h5><i class="fa fa-check color-b mr-3 mb-2"></i> ငှားရမ်းပေးခြင်း</h5>
          <h5><i class="fa fa-check color-b mr-3 mb-2"></i> အိမ်ခြံမြေနှင့်ပက်သက်သော ကိစ္စရပ်များအတွက် ဆွေးနွေးတိုင်ပင်ပေးခြင်း</h5>
          <h5><i class="fa fa-check color-b mr-3 mb-2"></i> Plinth Area Estimate(PAE)ဖြင့် အိမ်ရာများဆောက်လုပ်ပေးခြင်း</h5>
          <h5><i class="fa fa-check color-b mr-3 mb-2"></i> ဂရံအမည်ပေါက်ပြုလုပ်ပေးခြင်း</h5>
          <h5><i class="fa fa-check color-b mr-3 mb-2"></i> ပြန်လည်ပြုပြင်ပေးခြင်း</h5>
        </div>
      </div>
      
    </div>
  </section>
  <!--/ Services End /-->

  <!--/ Property Start /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Featured Properties</h2>
            </div>
            <div class="title-link">
              <a href="{{ route('propertyGrid') }}" class="text-decoration-none">More
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="owl-carousel owl-theme">
        @foreach ($properties as $p)
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="{{ asset('storage/'.$p->image_1) }}" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="{{ route('propertySingleP',$p->id) }}"><b>{{ $p->card_title_1 }}</b>  
                      <br/><b> {{ $p->card_title_2 }}</b></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">သိန်း {{ $p->price }}</span>
                  </div>
                  <a href="{{ route('propertySingleP',$p->id) }}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title"><i class="fa-solid fa-ruler-combined"></i> Area</h4>
                      <span>{{ $b->dimension }} ft
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title"><i class="fa fa-bed"></i> Beds</h4>
                      <span>{{ $b->master_bedroom + $b->double_bedroom + $b->single_bedroom }}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title"><i class="fa fa-shower"></i> Baths</h4>
                      <span>{{ $b->baths }}</span>
                    </li>
                    <li>
                      <h4 class="card-info-title"><i class="fa-solid fa-house-circle-check"></i> Type</h4>
                      <span>{{ $b->type }}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--/ Property End /-->

  <!--/ Condo Start /-->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Featured Condomiums</h2>
            </div>
            <div class="title-link">
              <a href="{{ route('propertyGrid') }}" class="text-decoration-none">More
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
      @foreach ($condos as $c)
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="{{ asset('storage/'.$c->image_1) }}" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="{{ route('propertySingleC',$c->id) }}" class="category-b">{{ $c->type }}</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="{{ route('propertySingleC',$c->id) }}">{{ $c->card_title_1 }} | 
                      <br> <small class="text-warning">{{ $c->card_title_2 }}</small> </a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">{{ $c->price }} သိန်း</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </section>
  <!--/ Condo End /-->


  <!--/ Testimonials Start /-->
  <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Follow Us On Facebook</h2>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="card-box-d">
                  <div class="card-img-d">
                    <img src="{{ asset('img/fb-page.jpg') }}" alt="" class="img-d img-fluid">
                  </div>
                  <div class="card-overlay card-overlay-hover">
                    <div class="card-header-d">
                      <div class="card-title-d align-self-center">
                        <h3 class="title-d">
                          <a href="https://m.facebook.com/khinetunaungrealestateagency/" class="link-two text-decoration-none">Khine Tun Aung
                            <br> Real Estate Agency</a>
                        </h3>
                      </div>
                    </div>
                    <div class="card-body-d">
                      <p class="title-d color-text-a">
                        နောက်ဆုံးရ အိမ်ခြံမြေ သတင်းများကို သိရှိရန် ကျွန်တော်တို့ရဲ့ facebook page ကို follow လုပ်ထားနိုင်ပါသည်ခင်ဗျာ။
                      </p>
                    </div>
                    <div class="card-footer-d">
                      <div class="socials-footer d-flex justify-content-center">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="https://m.facebook.com/khinetunaungrealestateagency/" class="link-one">
                              <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="fa-brands fa-viber" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="https://t.me/khinetunaungrealestateagency/" class="link-one">
                              <i class="fa-brands fa-telegram" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <button type="text" class="btn btn-success btn-lg text-white rounded-circle">
                    <i class="fa-solid fa-quote-left"></i>
                  </button>
                </div>
                <div class="testimonials-content">
                  <h4 class="testimonial-text">
                    လူကြီးမင်းတို့ လိုအပ်သော မြေကွက်များ၊ ရှာဖွေနေသော အိမ်ခြံမြေများကိုလည်း ကျွန်ုပ်တို့ထံ ဆက်သွယ်မေးမြန်းရှာဖွေနိုင်ပါသည်ခင်ဗျာ။
                  </h4>
                  <h4 class="testimonial-text">
                    လူကြီးမင်းတို့ ရောင်းလို၊ငှားရမ်းလိုသော အိမ်ခြံမြေ များကိုလည်း ယုံကြည်စိတ်ချစွာ အပ်နှံနိုင်ပါသည်ခင်ဗျာ။
                  </h4>
                  <h4 class="testimonial-text">
                    <p><strong><i class="fa-solid fa-mobile-screen-button text-success"></i> Call Us Now: </strong> <a href="tel:+959253962133" class="text-decoration-none"> +959 2539 62133</a></p>
                  </h4>
                </div>
          <!--  <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Albert & Erika</h5>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonials End /-->

  @endsection
 
