@extends('admin.layouts.master')

@section('title','Location List')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between mb-3">
                    <form class="form-header" action="{{ route('location#list') }}" method="get">
                        @csrf
                        <input class="au-input au-input--l" type="text" name="key" placeholder="Search for Locations . . ." value="{{ request('key') }}"/>
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <a href="{{ route('location#createPage') }}">
                        <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add new
                        </button>  
                    </a>   
                </div>
                <div class="col-md-12">
                    @if(session('createSuccess'))
                        <div class="alert au-alert-success au-alert au-alert--70per alert-dismissible fade show" role="alert">
                            <i class="zmdi zmdi-check-circle"></i>  
                            You Have <strong>{{ session('createSuccess') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="zmdi zmdi-close-circle"></i>
                                </span>
                            </button>
                        </div>
                    @endif
                    @if(session('deleteSuccess'))
                        <div class="alert au-alert-success au-alert au-alert--70per alert-dismissible fade show" role="alert">
                            <i class="zmdi zmdi-check-circle"></i>    
                            You Have <strong>{{ session('deleteSuccess') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="zmdi zmdi-close-circle"></i>
                                </span>
                            </button>
                        </div>
                    @endif
                    @if(session('updateSuccess'))
                        <div class="alert au-alert-success au-alert au-alert--70per alert-dismissible fade show" role="alert">
                            <i class="zmdi zmdi-check-circle"></i>    
                            You Have <strong>{{ session('updateSuccess') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="zmdi zmdi-close-circle"></i>
                                </span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>

            <div class="table-responsive table-responsive-data2 text-center mt-2">
              @if (count($locations) != 0)
                <table class="table table-data2">
                    <thead>
                        <tr> 
                            <th><i class="fas fa-hashtag mr-2 text-primary"></i>ID</th>
                            <th><i class="fas fa-map mr-2 text-primary"></i>Location</th>
                            <th>
                                <i class="fas fa-folder-open mr-2 text-primary"></i> {{ $locations->total() }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($locations as $location)
                        <tr class="tr-shadow">
                            <td>{{ $location->id }}</td>
                            <td>
                                <span class="block-email">{{ $location->name }}</span>
                            </td>
                            <td class="d-flex justify-content-center">
                                <div class="table-data-feature">
                                    <a href="{{ route('location#edit',$location->id) }}" class="mr-2">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit text-success"></i>
                                        </button>
                                    </a>
                                    <a href="{{ route('location#delete',$location->id) }}">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete text-danger"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                      @endforeach     
                    </tbody>
                </table>

                <!-- For Pagination -->
                <div class="mt-3">
                    {{ $locations->links() }}
                </div>
              @else
                <h3 class="text-secondary text-center ">There is no Locations Here!</h3>
              @endif 
            </div>
            <!-- END DATA TABLE -->

        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->

@endsection