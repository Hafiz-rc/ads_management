@extends('layout.erp.app')
@section('title','Manage AdCampains')
@section('style')


@endsection

@section('page')
<div class="row">
    <div class="col-12">

        <div class="card">

        @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class=" btn btn-close" data-bs-dismiss="alert" aria-label="Close" value="Close"> </button>
    </div>
@endif
            <div class="card-header" style="display: flex;justify-content:space-between">
                <div class="card-title">Manage AdCampaigns</div>

                <div> <a href="{{url('/adcampaigns/create')}}" class="btn btn-primary"> Create AdCampaign </a></div>
            </div>      
            <div class="card-body">
                <div class="">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered text-nowrap key-buttons">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">Ads Title</th>
                                    <th class="border-bottom-0">Start Date</th>
                                    <th class="border-bottom-0">End Date</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                           $sn=1
                            ?>

                            @foreach($adcampaigns as $adcampaign)
                                <tr>
                                    <td>{{$sn++}}</td>
                                    <td>{{$adcampaign->title}}</td>
                                    <td>{{$adcampaign->start_date}}</td>
                                    <td>{{$adcampaign->end_date}}</td>
                                    <td>

                                    <form action="{{route('adcampaigns.destroy',$adcampaign->id)}}" method="post">
											<a class='btn btn-primary' href="{{route('adcampaigns.show',$adcampaign->id)}}">View</a>
											<a class='btn btn-success' href="{{route('adcampaigns.edit',$adcampaign->id)}}"> Edit </a>
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