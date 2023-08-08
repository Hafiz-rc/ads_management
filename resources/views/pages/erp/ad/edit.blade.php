@extends('layout.erp.app')
@section('title','Edit Ads')
@section('style')


@endsection

@section('page')

<br/>
<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
    <div class="card">
    
<!-- View code (blade template) -->
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> Close</button>
    </div>
@endif

            <div class="card-header" style="display: flex;justify-content:space-between">
                <div class="card-title">Edit Ads</div>
                <div> <a href="{{'/ads'}}" class="btn btn-primary"> Manage Ads </a></div>
            </div>
        <div class="card-body">
            <form   class="form-horizontal needs-validation was-validated"  action="{{route('ads.update',$ad)}}" method ="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mb-3 row">
                    <label for="ad_title" class="col-md-3 form-label"> Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control  mb-4 is-valid state-valid" placeholder="title" required="" id="ad_title" name="ad_title" value="{{$ad->ad_title}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="ad_description" class="col-md-3 form-label">Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control  mb-4 is-valid state-valid" placeholder="Description" required="" id="ad_description" name="ad_description"> {{$ad->ad_description}}</textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="ad_type" class="col-md-3 form-label">Type</label>
                    <div class="col-md-9">
                    <select class="form-control mb-4" aria-hidden="true" id="ad_type" name="ad_type" required=""> 
    <option value="Bannar" @if ($ad->ad_type === 'Bannar') selected @endif>Bannar</option>
    <option value="Pop-up" @if ($ad->ad_type === 'Pop-up') selected @endif>Pop-up</option>
    <option value="Affiliate" @if ($ad->ad_type === 'Affiliate') selected @endif>Affiliate</option>
    <option value="Rich Media" @if ($ad->ad_type === 'Rich Media') selected @endif>Rich Media</option>
</select>

                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="ad_url" class="col-md-3 form-label">Link</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control  mb-4 is-valid state-valid" placeholder="Link" required="" id="ad_type" name="ad_url" placeholder="ad_url" value="{{$ad->ad_description}}">
                    </div>
                </div>
                <div class="mb-0 mt-4 row justify-content-center ">
                    <div class=" col-12 col-md-4 " >
                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('script')


@endsection