@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
					<a href="/jmlocator" class="btn btn-default">Back</a> Create
				</div>

                <div class="panel-body">
                	<div class="col-md-12 myApp">
                    	<img alt="combolocator" src="/img/map.png" width=250 height=250 />
                        <h4>JMLocator form for register new object for client to stay connect with their finding.</h4>
                    	<hr>
                	</div>
					<!-- Table view -->
                    <form method="post" action="{{ route('jmlocator.store')  }}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6">

                            <div class="form-group{{ $errors->has('loc_name') ? ' has-error' : '' }}">
                                <label for="loc_name" class="col-md-4 control-label">Location Name</label>

                                <div class="col-md-6">
                                    <input id="loc_name" type="text" class="form-control" name="loc_name" value="{{ old('loc_name') }}" required >

                                    @if ($errors->has('loc_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('loc_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('loc_lat') ? ' has-error' : '' }}">
                                <label for="loc_lat" class="col-md-4 control-label">Latitude</label>

                                <div class="col-md-6">
                                    <input id="loc_lat" type="text" class="form-control" name="loc_lat" value="{{ old('loc_lat') }}" required >

                                    @if ($errors->has('loc_lat'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('loc_lat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('loc_address') ? ' has-error' : '' }}">
                                <label for="loc_address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <textarea id="loc_address" class="form-control" cols="20" rows="5" name="loc_address" value="{{ old('loc_address') }}" required ></textarea>

                                    @if ($errors->has('loc_address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('loc_address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('loc_image') ? ' has-error' : '' }}">
                                <label for="loc_image" class="col-md-4 control-label">Picture</label>

                                <div class="col-md-6">
                                    <input id="loc_image" type="file" class="form-control" name="loc_image" value="{{ old('loc_image') }}" >

                                    @if ($errors->has('loc_image'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('loc_image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group{{ $errors->has('loc_phone') ? ' has-error' : '' }}">
                                <label for="loc_phone" class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input id="loc_phone" type="text" class="form-control" name="loc_phone" value="{{ old('loc_phone') }}">

                                    @if ($errors->has('loc_phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('loc_phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('loc_long') ? ' has-error' : '' }}">
                                <label for="loc_long" class="col-md-4 control-label">Longitude</label>

                                <div class="col-md-6">
                                    <input id="loc_long" type="text" class="form-control" name="loc_long" value="{{ old('loc_long') }}" required >

                                    @if ($errors->has('loc_long'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('loc_long') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('loc_desc') ? ' has-error' : '' }}">
                                <label for="loc_desc" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea id="loc_desc" class="form-control" cols="20" rows="5" name="loc_desc" value="{{ old('loc_desc') }}"></textarea>

                                    @if ($errors->has('loc_desc'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('loc_desc') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-success">Register</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
