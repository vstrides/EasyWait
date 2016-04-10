@extends('layouts.app')
    @section('content')
        @foreach($vendors as $vendor)
            <h2><span class="label label-default">{{ $vendor->name }}</span></h2><br><br>
                <div class="btn-group" role="group" aria-label="...">
                    @foreach($vendor->customers as $customer)
                    <button type="button" class="btn btn-{{ $customer->status == 1 ? 'primary' : 'default' }}">{{ $customer->name }}</button>
                    @endforeach
                </div>

            <br><br>
        @endforeach
    @endsection