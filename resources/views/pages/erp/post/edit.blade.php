@extends('layout.erp.app')
@section('title','Edit Post')
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
            <div class="card-title">Edit Post</div>
            <div> <a href="{{'/posts'}}" class="btn btn-primary"> Manage Post </a></div>
        </div>
        <div class="card-body">
            <form class="form-horizontal needs-validation was-validated" action="{{route('posts.update', $post )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
                <div class="mb-3 row">
                    <label for="title" class="col-md-3 form-label">Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control  mb-4 is-valid state-valid" placeholder="title" required="" id="title" name="title" value="{{$post->title}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="content" class="col-md-3 form-label">Centent</label>
                    <div class="col-md-9">
                        <textarea class="form-control  mb-4 is-valid state-valid" required="" id="content" name="content">{{$post->content}}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="user_id" class="col-md-3 form-label">Blogger</label>
                    <div class="col-md-9">
                        <select class="form-control  mb-4" aria-hidden="true" id="user_id" name="user_id" required=""> 
                        @foreach($users as $user)
                      <option value="{{$user->id}}" {{$user->id == $post->user_id ? 'selected' : '' }}>{{$user->username}}</option>
                         @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-0 mt-4 row justify-content-center ">
                    <div class=" col-12 col-md-4 ">
                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
                        <a href="{{url('/posts')}}" class="btn btn-secondary btn-lg">Cancle</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('script')


@endsection