@extends('layout.erp.app')
@section('title','Manage Ads')
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
                <div class="card-title">Manage Ads</div>

                <div> <a href="{{'/ads/create'}}" class="btn btn-primary"> Create Ads </a></div>
            </div>      
            <div class="card-body">
                <div class="">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered text-nowrap key-buttons">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">Title</th>
                                    <th class="border-bottom-0">Description</th>
                                    <th class="border-bottom-0">Type</th>
                                    <th class="border-bottom-0">Link</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                           $sn=1
                            ?>

                            @foreach($ads as $ad)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{$ad->ad_title}}</td>
                                    <td>{{$ad->ad_description}}</td>
                                    <td>{{$ad->ad_type}}</td>
                                    <td>{{$ad->ad_url}}</td>
                                    <td>

                                    <form action="{{route('ads.destroy',$ad->id)}}" method="post">
											<a class='btn btn-primary' href="{{route('ads.show',$ad->id)}}">View</a>
											<a class='btn btn-success' href="{{route('ads.edit',$ad->id)}}"> Edit </a>
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