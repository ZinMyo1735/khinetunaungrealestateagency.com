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
            <a class="nav-link active" href="{{ route('propertyGrid') }}">Property List</a>
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

<!--/ Intro Single start /-->
<section class="intro-single">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="title-single-box">
            <h1 class="title-single">{{ $properties->post_title }}</h1>
            <span class="color-text-a">{{ $properties->location_name }} Township</span>
            </div>
        </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ Property Single Start /-->
<section class="property-single nav-arrow-b">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
                <img src="{{ asset('storage/'.$properties->image_2) }}" alt="">
            </div>
            <div class="carousel-item-b">
                <img src="{{ asset('storage/'.$properties->image_3) }}" alt="">
            </div>
            <div class="carousel-item-b">
                <img src="{{ asset('storage/'.$properties->image_4) }}" alt="">
            </div>
            </div>
            <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                    <span class="ion-money">{{ $properties->price }}</span>
                    </div>
                    <div class="card-title-c align-self-center">
                    <h5 class="title-c">သိန်း</h5>
                    </div>
                </div>
                </div>
                <div class="property-summary">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                        <h3 class="title-d">Quick Summary</h3>
                    </div>
                    </div>
                </div>
                <div class="summary-list">
                    <ul class="list">
                    <li class="d-flex justify-content-between">
                        <strong>Property ID:</strong>
                        <span>{{ $properties->id }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <strong>Location:</strong>
                        <span>{{ $properties->location_name }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <strong>Property Type:</strong>
                        <span>{{ $properties->type }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <strong>Area:</strong>
                        <span>{{ $properties->dimension }} ft
                        <sup>2</sup>
                        </span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <strong>Master Bedroom:</strong>
                        <span>{{ $properties->master_bedroom }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <strong>Double Bedroom:</strong>
                        <span>{{ $properties->double_bedroom }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <strong>Single Bedroom:</strong>
                        <span>{{ $properties->single_bedroom }}</span>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="property-description">
                <p class="description color-text-a">
                    <strong>
                    {{ $properties->header_text }}
                    </strong>
                </p>
                <p class="description color-text-a">
                    <i class="fa-solid fa-circle-check text-success"></i>
                    <strong>
                    {{ $properties->body_text_1 }}
                    </strong>
                </p>
                <p class="description color-text-a">
                    <i class="fa-solid fa-circle-check text-success"></i>
                    <strong>
                    {{ $properties->body_text_2 }}
                    </strong>
                </p>
                <p class="description color-text-a">
                    <i class="fa-solid fa-circle-check text-success"></i>
                    <strong>
                    {{ $properties->body_text_3 }}
                    </strong>
                </p>
                <p class="description color-text-a">
                    <i class="fa-solid fa-circle-check text-success"></i>
                    <strong>
                    {{ $properties->body_text_4 }}
                    </strong>
                </p>
                <p class="description color-text-a no-margin">
                    <strong>
                    အသေးစိတ်သိရှိလိုပါက<br>
                    <i class="fa-solid fa-phone-volume text-success"></i> 09421035084, <br>
                    <i class="fa-solid fa-phone-volume text-success"></i> 09253962133, <br>
                    <i class="fa-solid fa-phone-volume text-success"></i> 09795621147, <br>
                    <i class="fa-solid fa-phone-volume text-success"></i> 09250189717 <br>
                    သို့ရုံးချိန်အတွင်း အသေးစိတ် စုံစမ်းမေးမြန်းနိုင်ပါသည် ခင်ဗျာ။
                    </strong>
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!--/ Property Single End /-->

@endsection