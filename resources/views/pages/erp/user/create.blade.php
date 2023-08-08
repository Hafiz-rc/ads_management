@extends('layout.erp.app')
@section('title','Manage user')
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
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

            <div class="card-header" style="display: flex;justify-content:space-between">
                <div class="card-title">Create User</div>
                <div> <a href="{{'/users'}}" class="btn btn-primary"> Manage User </a></div>
            </div>
        <div class="card-body">
            <form   class="form-horizontal needs-validation was-validated"  action="{{route('users.store')}}" method ="post" enctype="multipart/form-data">
             @csrf
                <div class="mb-3 row">
                    <label for="inputName" class="col-md-3 form-label">User Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control  mb-4 is-valid state-valid" placeholder="Username" required="" id="username" name="username" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputEmail3" class="col-md-3 form-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" class="form-control  mb-4 is-valid state-valid" placeholder="Email" required="" id="email"  name="email">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword3" class="col-md-3 form-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control  mb-4 is-valid state-valid" placeholder="Password" required="" id="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="mb-0 mt-4 row justify-content-center ">
                    <div class=" col-12 col-md-4 " >
                        <button type="submit" class="btn btn-primary btn-lg">Create</button>
                        <button type="reset" class="btn btn-secondary btn-lg">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('script')


@endsection