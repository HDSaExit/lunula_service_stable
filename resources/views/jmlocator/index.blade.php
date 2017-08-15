@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
					<a href="/home" class="btn btn-default">Back</a> JMLocator
				</div>

                <div class="panel-body">
                	<div class="col-md-12 myApp">
                    	<img alt="combolocator" src="img/map.png" width=250 height=250 />
                    	<h4><a href="/jmlocator/create" class="btn btn-primary">Create</a> JM Locator is important for locating rent room/house. @2017 All right receieved.</h4>
                	</div>
					<!-- Table view -->
					<div class="col-md-12">
						<table class="table table-bordered">
							<thead>
								<tr style="text-align: center">
									<th>ID</th>
									<th>Picture</th>
									<th>Name</th>
									<th>Phone</th>
									<th>Address</th>
									<th>Latitude</th>
									<th>Longitude</th>
									<th>Description</th>
									<th>Edit/Remove</th>
								</tr>
							</thead>
							<tbody>
								@foreach($locations as $location)
									<tr>
										<td>{{$location->loc_id}}</td>
										<td><img src="{{ asset('img/upload/'.$location->loc_image) }}" width="90" height="50" style="border-radius: 50px"></td>
										<td>{{$location->loc_name}}</td>
										<td>{{$location->loc_phone}}</td>
										<td>{{$location->loc_address}}</td>
										<td>{{$location->loc_lat}}</td>
										<td>{{$location->loc_long}}</td>
										<td>{{$location->loc_desc}}</td>
										<td>
											<a href="#" class="btn btn-warning">edit</a>/
											<a href="#" class="btn btn-danger">remove</a>
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
