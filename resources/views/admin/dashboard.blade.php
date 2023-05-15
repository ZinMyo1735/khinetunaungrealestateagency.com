@extends('admin.layouts.master')

@section('title','Admin Dashboard')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-12">
                    <h1 class="title-4">
                        Your Recent Posts
                    </h1>
                    <hr class="line-seprate bg-white">
                </div>
            </div>

            @if(session('changeSuccess'))
                <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                    <i class="zmdi zmdi-check-circle"></i>    
                    You Have <strong>{{ session('changeSuccess') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="zmdi zmdi-close-circle"></i>
                        </span>
                    </button>
                </div>
            @endif
            @if(session('updateSuccess'))
                <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                    <i class="zmdi zmdi-check-circle"></i>    
                    You Have <strong class="content">{{ session('updateSuccess') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="zmdi zmdi-close-circle"></i>
                        </span>
                    </button>
                </div>
            @endif

            @if (count($properties) != 0)
              <div class="row m-t-25">
              @foreach ($properties as $p)
                
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('storage/'.$p->image_2) }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title mb-3 text-primary">{{ $p->card_title_1 }} {{ $p->card_title_2 }}</h4>
                                    <p class="card-text text-secondary mb-3">သိန်း {{ $p->price }}</p>
                                <a href="{{ route('property#edit',$p->id) }}" class="btn btn-primary">Click here to view</a>
                            </div>
                        </div>
                    </div>
                
              @endforeach
              </div>
              <!-- For Pagination -->
              <div class="mt-3">
                {{ $properties->links() }}
              </div>

            @else
            <div class="row m-t-25">
                <h3 class="text-secondary text-center ">There is no Properties Here!</h3>
            </div>
            @endif  
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->

@endsection