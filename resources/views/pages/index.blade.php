@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <ul class="list-group">
                        @foreach($vendors as $vendor)
                        <li class="list-group-item"><h4>
                            <label>Name:</label>
                            {{ $vendor->name }}<br>
                            <label>ID:</label>
                            {{ $vendor->id }}
                        <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#form">Appointment</button>
                            </h4>
                        </li>
                        @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                        <div id="form" class="panel panel-default collapse">
                            <div class="panel-heading">Take Appointment</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/appointments') }}">
                                    {!! csrf_field() !!}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="col-md-4 control-label">Name</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter name">

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="col-md-4 control-label">Phone</label>

                                        <div class="col-md-6">
                                            <input type="number" class="form-control" name="number" placeholder="Enter Phone number">

                                            @if ($errors->has('number'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Vendor ID:</label>

                                        <div class="col-md-6">
                                            <input type="number" class="form-control" placeholder="Enter Vendor's ID" name="vendor_id">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <input type="submit" class=" btn btn-default" value="Confirm">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
            </div>
        </div>
    @endsection