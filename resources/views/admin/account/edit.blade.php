@extends('admin.layouts.master')

@section('title','Edit Account Info')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            
            <div class="d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-3">
                                        <a href="{{ route('dashboard') }}" class="text-dark">
                                            <i class="fas fa-arrow-left fa-lg mr-4"></i>
                                        </a>
                                    </div>
                                    <div class="col-7 text-center"><h3 class="title-2">Edit Account Info</h3></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-5 text-center">
                                    @if (Auth::user()->image == null)
                                        <img src="{{ asset('img/default_user.png') }}">
                                    @else
                                        <img src="{{ asset('storage/'.Auth::user()->image) }}" />
                                    @endif
                                </div>
                                <form action="{{ route('admin#update',Auth::user()->id) }}" method="post" enctype="multipart/form-data" class="col-md-7">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label mb-1"><i class="fas fa-user mr-2 text-success"></i>Name</label>
                                        <input name="name" type="text" value="{{ old('name',Auth::user()->name) }}" class="form-control @error('name') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Enter Your Name...">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label mb-1"><i class="fas fa-envelope mr-2 text-success"></i>Email</label>
                                        <input name="email" type="text" value="{{ old('email',Auth::user()->email) }}" class="form-control @error('email') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Enter Your Email Address...">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label mb-1"><i class="fas fa-user-circle mr-2 text-success"></i>Role</label>
                                        <input name="role" type="text" value="{{ old('role',Auth::user()->role) }}" class="form-control" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label mb-1"><i class="fas fa-image mr-2 text-success"></i>Profile Photo</label>
                                        <input name="image" type="file" class="form-control @error('image') is-invalid @enderror">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                            <span id="payment-button-amount">Update</span>
                                            <i class="fas fa-chevron-circle-right ml-2"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->

@endsection