@extends('layout.erp.app')
@section('title','Show Post')
@section('style')


@endsection
@section('page')



<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header" style="display: flex;justify-content:space-between">
                <div class="card-title">Details Post</div>
                <div> <a href="{{'/posts'}}" class="btn btn-primary"> Manage Post </a></div>
            </div>
            <div class="card-body">
                <div class="">
                    <div class="table-responsive">
                    <table class='table table-bordered text-nowrap key-buttons'>
<tbody >
		<tr><th>Title</th><td>{{$post->title}}</td></tr>
		<tr><th>Content</th><td>{{$post->content}}</td></tr>
		<tr><th>Blogger</th><td>{{$post->user}}</td></tr>
		<tr><th>Ctreate Time</th><td>{{$post->created_at}}</td></tr>
		<tr><th>Update Time</th><td>{{$post->updated_at}}</td></tr>
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

