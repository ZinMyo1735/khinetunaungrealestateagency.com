@extends('admin.layouts.master')

@section('title','Feature Condo List')

@section('content')

<!-- MAIN CONTENT-->

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="overview-wrap">
                                <h2 class="title-1 text-secondary">Featured Condo Posts</h2>
                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <div class="overview-wrap">
                                <a href="{{ route('condo#createPage') }}">
                                    <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add new post
                                    </button>  
                                </a>
                            </div>
                        </div>
                    </div> 
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
                @if (count($houses) != 0)
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th><i class="fas fa-hashtag mr-2 text-primary"></i>ID</th>
                            <th><i class="fas fa-map mr-2 text-primary"></i>Location</th>
                            <th><i class="fas fa-dollar-sign mr-2 text-primary"></i>Price</th>
                            <th>
                                <i class="fas fa-folder-open mr-2 text-primary"></i> 1
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($houses as $house)
                        <tr class="tr-shadow">
                            <td>{{ $house->id }}</td>
                            <td>
                                <span class="block-email">{{ $house->location_name }}</span>
                            </td>
                            <td class="desc">{{ $house->price }} သိန်း</td>
                            <td class="d-flex justify-content-center">
                                <div class="table-data-feature">
                                    <a href="{{ route('condo#edit',$house->id) }}" class="mr-2">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit text-success"></i>
                                        </button>
                                    </a>
                                    <a href="{{ route('condo#delete',$house->id) }}">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete text-danger"></i>
                                        </button>
                                    </a>
                                </div>
                            </td> 
                        </tr>
                        <tr class="spacer"></tr>
                      @endforeach
                    @else
                        <h3 class="text-secondary text-center ">There is no Feature Condo Posts Here!</h3>
                    @endif  
                    </tbody>
                </table>

                <!-- For Pagination -->
                <div class="mt-3">
                    {{ $houses->links() }}
                </div>
            </div>
            <!-- END DATA TABLE -->

        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->

@endsection