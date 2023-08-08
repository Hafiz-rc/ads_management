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
                <div> <a href="{{'/users'}}" class="btn btn-primary"> Manage User </a></div>
            </div>
            <div class="card-body">
                <div class="">
                    <div class="table-responsive">
                    <table class='table table-bordered text-nowrap key-buttons'>
<tbody >
		<tr><th>Name</th><td>{{$user->username}}</td></tr>
		<tr><th>Email</th><td>{{$user->email}}</td></tr>
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

