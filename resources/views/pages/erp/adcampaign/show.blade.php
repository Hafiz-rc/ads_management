
@extends('layout.erp.app')
@section('title','Show AdCampain')
@section('style')


@endsection
@section('page')



<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header" style="display: flex;justify-content:space-between">
                <div class="card-title">Details User</div>
                <div> <a href="{{'/adcampaigns'}}" class="btn btn-primary"> Manage AdCampaigns </a></div>
            </div>
            <div class="card-body">
                <div class="">
                    <div class="table-responsive">
                    <table class='table table-bordered text-nowrap key-buttons'>
<tbody >
		<tr><th>Title</th><td>{{$adcampaign->title}}</td></tr>
		<tr><th>Start Date</th><td>{{$adcampaign->start_date}}</td></tr>
		<tr><th>End Date</th><td>{{$adcampaign->end_date}}</td></tr>
		<tr><th>Ctreate Time</th><td>{{$adcampaign->created_at}}</td></tr>
		<tr><th>Update Time</th><td>{{$adcampaign->updated_at}}</td></tr>
</tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')


@endsection

