@extends('layout.erp.app')
@section('title','Show User')
@section('style')


@endsection
@section('page')



<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header" style="display: flex;justify-content:space-between">
                <div class="card-title">Details User</div>
                <div> <a href="{{'/ads'}}" class="btn btn-primary"> Manage User </a></div>
            </div>
            <div class="card-body">
                <div class="">
                    <div class="table-responsive">
                    <table class='table table-bordered text-nowrap key-buttons'>
<tbody >
		<tr><th>Title</th><td>{{$ad->ad_title}}</td></tr>
		<tr><th>Description</th><td>{{$ad->ad_description}}</td></tr>
		<tr><th>Type</th><td>{{$ad->ad_type}}</td></tr>
		<tr><th>Link</th><td>{{$ad->ad_url}}</td></tr>
		<tr><th>Ctreate Time</th><td>{{$ad->created_at}}</td></tr>
		<tr><th>Update Time</th><td>{{$ad->updated_at}}</td></tr>
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

