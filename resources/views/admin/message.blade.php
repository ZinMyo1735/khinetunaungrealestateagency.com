@extends('admin.layouts.master')

@section('title','Customer Messages')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Customer Messages</h2>
                    </div>
                </div>
            </div>
            
            @if (count($messages) != 0)
              <div class="row m-t-25">
              @foreach ($messages as $m)
                
                    <div class="col-md-4">
                        <div class="card shadow rounded">
                            <div class="card-header d-flex justify-content-between">
                                <span class="text-success"><i class="fas fa-user mr-2"></i><small>{{ $m->name }}</small></span>
                                <span class="text-primary"><i class="fas fa-envelope mr-2"></i><small>{{ $m->email }}</small></span>
                            </div>
                            <div class="card-body">
                                <strong class="card-title text-dark">{{ $m->subject }}</strong>
                                <p class="card-text text-secondary">
                                    {{ $m->message }}
                                </p>
                                <hr>
                                <div class="card-text text-secondary d-flex justify-content-between">
                                    <span><i class="fas fa-clock mr-2 text-success"></i><small>{{ $m->created_at }}</small></span>
                                    <a href="{{ route('message#delete',$m->id) }}">
                                        <button class="btn rounded-circle bg-danger" data-toggle="tooltip" data-placement="top" title="Delete Message">
                                            <i class="fas fa-trash text-white"></i>
                                        </button>
                                    </a>
                                </div>  
                            </div>
                        </div>
                    </div>
                
              @endforeach
              </div>
              <!-- For Pagination -->
              <div class="mt-3">
                {{ $messages->links() }}
              </div>

            @else
            <div class="row m-t-25">
                <h3 class="text-secondary text-center ">There is no Messages Here!</h3>
            </div>
            @endif 
        </div>
    </div>
</div>

@endsection