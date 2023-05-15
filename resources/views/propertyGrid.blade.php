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
                        <!-- <select name="sortBy" class="form-control form-control-lg form-control-a">
                            <option value="">All Type</option>
                            <option value="50 x 60" @if(request('sortBy') == '50 x 60') selected @endif>50 x 60 sqft</option>
                            <option value="40 x 60" @if(request('sortBy') == '40 x 60') selected @endif>40 x 60 sqft</option>
                            <option value="20 x 60" @if(request('sortBy') == '20 x 60') selected @endif>20 x 60 sqft</option>
                        </select> -->
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
        <a class="navbar-brand text-brand" href="{{ route('welcome') }}">Khine<span class="color-b">TunAung</span></a>
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
        <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <!-- <span class="color-text-a">Grid Properties</span> -->
            </div>
            
        </div>
        <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort By
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach($locations as $l) 
                        <a class="dropdown-item" href="{{ route('location#filter',$l->id) }}">{{ $l->name }}</a>
                    @endforeach
                    </div>
                </div>
            </nav>
        </div>
        
    </div>
</div>
</section>
<!--/ Intro Single End /-->

<!--/ Property Grid Start /-->
<section class="property-grid grid">
<div class="container">
  @if (count($houses) != 0)
    <div class="row">
      @foreach ($houses as $house)
        <div class="col-md-4">
            <div class="card-box-a card-shadow">
            <div class="img-box-a">
                <img src="{{ asset('storage/'.$house->image_1) }}" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
                <div class="card-overlay-a-content">
                <div class="card-header-a">
                    <h2 class="card-title-a">
                    <a href="{{ route('propertySingle',$house->id) }}">
                        <span class="text-warning">{{ $house->location_name }} |</span>
                        <b class="text-success"> {{ $house->card_title_1 }}</b>
                        <br /> {{ $house->card_title_2 }}</a>
                    </h2>
                </div>
                <div class="card-body-a">
                    <div class="price-box d-flex">
                    <span class="price-a">သိန်း {{ $house->price }}</span>
                    </div>
                    <a href="{{ route('propertySingle',$house->id) }}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                    </a>
                </div>
                <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                    <li>
                        <h4 class="card-info-title"><i class="fa-solid fa-ruler-combined"></i> Area</h4>
                        <span>{{ $house->dimension }} ft
                        <sup>2</sup>
                        </span>
                    </li>
                    <li>
                        <h4 class="card-info-title"><i class="fa fa-bed"></i> Beds</h4>
                        <span>{{ $house->master_bedroom + $house->double_bedroom + $house->single_bedroom }}</span>
                    </li>
                    <li>
                        <h4 class="card-info-title"><i class="fa fa-shower"></i> Baths</h4>
                        <span>{{ $house->baths }}</span>
                    </li>
                    <li>
                        <h4 class="card-info-title"><i class="fa-solid fa-house-circle-check"></i> Type</h4>
                        <span>{{ $house->type }}</span>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
      @endforeach
    </div>

    <div class="row">
        <div class="col-sm-12">
            <!-- {{ $houses->links('pagination::custom') }} -->
            {{ $houses->links('vendor.pagination.custom') }}
        </div>
    </div> 

  @else
    <h3 class="text-secondary text-center ">There is no Properties Here!</h3>
  @endif

</div>
</section>
<!--/ Property Grid End /-->

@endsection