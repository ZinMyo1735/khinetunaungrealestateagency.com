@extends('admin.layouts.master')

@section('title','Property Create')

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
                                <a href="{{ route('banner#list') }}" class="text-white">
                                    <i class="fas fa-arrow-circle-left mr-5"></i>
                                </a>
                                Add New Featured Banner Post
                            </h3>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('banner#create') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Card Title 1</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="{{ old('cardTitle1') }}" name="cardTitle1" placeholder="၃၆ ရပ်ကွက် . . ." class="form-control @error('cardTitle1') is-invalid @enderror">
                                        @error('cardTitle1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Card Title 2</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="{{ old('cardTitle2') }}" name="cardTitle2" placeholder="ပင်လုံလမ်း အနီး . . ." class="form-control @error('cardTitle2') is-invalid @enderror">
                                        @error('cardTitle2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Post Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="{{ old('postTitle') }}" name="postTitle" placeholder="မြန်မာဘာသာဖြင့် . . ." class="form-control @error('postTitle') is-invalid @enderror">
                                        @error('postTitle')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Header Text</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="headerText" rows="9" placeholder="မြန်မာဘာသာဖြင့် . . ." class="form-control @error('headerText') is-invalid @enderror">
                                            {{ old('headerText') }}
                                        </textarea>
                                        @error('headerText')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Body Text 1</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="{{ old('bodyText1') }}" name="bodyText1" placeholder="မြန်မာဘာသာဖြင့် . . ." class="form-control @error('bodyText1') is-invalid @enderror">
                                        @error('bodyText1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Body Text 2</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="{{ old('bodyText2') }}" name="bodyText2" placeholder="မြန်မာဘာသာဖြင့် . . ." class="form-control @error('bodyText2') is-invalid @enderror">
                                        @error('bodyText2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Body Text 3</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="{{ old('bodyText3') }}" name="bodyText3" placeholder="မြန်မာဘာသာဖြင့် . . ." class="form-control @error('bodyText3') is-invalid @enderror">
                                        @error('bodyText3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Body Text 4</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="{{ old('bodyText4') }}" name="bodyText4" placeholder="မြန်မာဘာသာဖြင့် . . ." class="form-control @error('bodyText4') is-invalid @enderror">
                                        @error('bodyText4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Price (lakhs)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="{{ old('propertyPrice') }}" name="propertyPrice" placeholder=" ၂၀၀၀ . . ." class="form-control @error('propertyPrice') is-invalid @enderror">
                                        @error('propertyPrice')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Location</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="propertyLocation" class="form-control @error('propertyLocation') is-invalid @enderror">
                                            <option value="">Please select</option>
                                            @foreach ($locations as $l)
                                                <option value="{{ $l->id }}">{{ $l->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('propertyLocation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Dimension</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" value="{{ old('propertyDimension') }}" name="propertyDimension" placeholder="40 x 60 . . ." class="form-control @error('propertyDimension') is-invalid @enderror">
                                        @error('propertyDimension')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Master Bedroom</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="mBed" class="form-control @error('mBed') is-invalid @enderror">
                                            <option value="">Please select</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                        @error('mBed')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Double Bedroom</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="dBed" id="select" class="form-control @error('dBed') is-invalid @enderror">
                                            <option value="">Please select</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                        @error('dBed')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Single Bedroom</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="sBed" id="select" class="form-control @error('sBed') is-invalid @enderror">
                                            <option value="">Please select</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                        @error('sBed')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Baths</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="bathWC" id="select" class="form-control @error('bathWC') is-invalid @enderror">
                                            <option value="">Please select</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                        @error('bathWC')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Type</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="propertyType" id="select" class="form-control @error('propertyType') is-invalid @enderror">
                                            <option value="">Please select</option>
                                            <option value="House">House</option>
                                            <option value="Land">Land</option>
                                            <option value="Apartment">Apartment</option>
                                            <option value="Condo">Condo</option>
                                            <option value="Mini-Condo">Mini-Condo</option>
                                        </select>
                                        @error('propertyType')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Image 1 (3:4)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" name="image1" class="form-control @error('image1') is-invalid @enderror">
                                        @error('image1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div> 
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Image 2 (16:9)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" name="image2" class="form-control @error('image2') is-invalid @enderror">
                                        @error('image2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Image 3 (16:9)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" name="image3" class="form-control @error('image3') is-invalid @enderror">
                                        @error('image3')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Image 4 (16:9)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" name="image4" class="form-control @error('image4') is-invalid @enderror">
                                        @error('image4')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="au-btn au-btn--blue px-5">
                                        Create <i class="fas fa-caret-right fa-lg ml-2"></i>
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
<!-- END MAIN CONTENT-->

@endsection