@extends('layout.erp.app')
@section('title','Manage user')
@section('style')


@endsection

@section('page')


<div class="row">
    <div class="col-12">

        <div class="card">
            
        @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> Close</button>
    </div>
@endif
            <div class="card-header" style="display: flex;justify-content:space-between">
                <div class="card-title">Manage User</div>
                <div> <a href="{{'/users/create'}}" class="btn btn-primary"> Create User </a></div>
            </div>
            <div class="card-body">
                <div class="">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered text-nowrap key-buttons">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">Name</th>
                                    <th class="border-bottom-0">Email</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $sn=1 ?>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>

                                    <form action="{{route('users.destroy',$user->id)}}" method="post">
											<a class='btn btn-primary' href="{{route('users.show',$user->id)}}">View</a>
											<a class='btn btn-success' href="{{route('users.edit',$user->id)}}"> Edit </a>
											@method('DELETE')
											@csrf
											<input type="submit" class="btn btn-danger" name="delete" value="Delete" />
										</form>
                                    </td>     
                                </tr>
                            @endforeach
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