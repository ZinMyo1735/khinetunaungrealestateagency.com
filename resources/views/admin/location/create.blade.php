@extends('admin.layouts.master')

@section('title','Location Create')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-25">
                <div class="col-lg-10">
                    <div class="au-card au-card--no-shadow au-card--no-pad">
                        <div class="au-card-title" style="background-image:url({{ asset('admin/images/bg.jpg') }});">
                            <div class="bg-overlay bg-overlay--blue"></div>    
                            <h3>
                                <a href="{{ route('location#list') }}" class="text-white">
                                    <i class="fas fa-arrow-circle-left mr-5"></i>
                                </a>
                                Add New Location
                            </h3>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('location#create') }}" method="post" class="form-horizontal">
                                @csrf
                                <div class="row form-group d-flex justify-content-center">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Township Name</label>
                                    </div>
                                    <div class="col-12 col-md-9 mb-4">
                                        <input type="text" value="{{ old('locationName') }}" name="locationName" placeholder="North Dagon . . ." class="form-control @error('locationName') is-invalid @enderror">
                                        @error('locationName')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div>
                                        <button type="submit" class="au-btn au-btn--blue px-5">
                                            Create <i class="fas fa-caret-right fa-lg ml-2"></i>
                                        </button>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->

@endsection