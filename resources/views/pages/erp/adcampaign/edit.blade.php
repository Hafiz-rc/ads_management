@extends('layout.erp.app')
@section('title','Create Ads')
@section('style')


@endsection

@section('page')

<br />
<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
    <div class="card">

        <!-- View code (blade template) -->
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="card-header" style="display: flex;justify-content:space-between">
            <div class="card-title">Edit AdCampaign</div>
            <div> <a href="{{'/adcampaigns'}}" class="btn btn-primary"> Manage AdCampaign </a></div>
        </div>
        <div class="card-body">
            <form class="form-horizontal needs-validation was-validated" action="{{route('adcampaigns.update', $adcampaign)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
                <div class="mb-3 row">
                    <label for="ad_id" class="col-md-3 form-label">Title</label>
                    <div class="col-md-9">
                        <select class="form-control  mb-4" aria-hidden="true" id="ad_id" name="ad_id" required=""> 
                        @foreach($ads as $ad)
                      <option value="{{$ad->id}}" {{ $ad->id == $adcampaign->ad_id ? 'selected' : '' }}>{{$ad->ad_title}}</option>
                         @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="start_date" class="col-md-3 form-label">Start Date</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control  mb-4 is-valid state-valid" placeholder="Password" required="" id="start_date" name="start_date" value="{{$adcampaign->start_date}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="end_date" class="col-md-3 form-label">End Date</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control  mb-4 is-valid state-valid" placeholder="Password" required="" id="end_date" name="end_date" value="{{$adcampaign->end_date}}">
                    </div>
                </div>
                <div class="mb-0 mt-4 row justify-content-center ">
                    <div class=" col-12 col-md-4 ">
                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
                        <a href="{{'/adcampaigns'}}" class="btn btn-secondary btn-lg">Cancle</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('script')


@endsection