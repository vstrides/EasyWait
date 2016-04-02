@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><span style="color:midnightblue;"><span style="font-family:'Lucida Handwriting';"><span style="font-size:160%;">Welcome to Login Section !</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"><b><span style="color:black;"><span style="font-family:'MV Boli';"><span style="font-size:150%;">E-Mail Address</b></label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"><b><span style="color:black;"><span style="font-family:'MV Boli';"><span style="font-size:150%;">Password</b></label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"><b><span style="color:darkturquoise;"><span style="font-family:'Kristen ITC';"><span style="font-size:110%;"> Should I be a Frequent User ?</b>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i><b><span style="color:wheat;"><span style="font-family:'MV Boli';"><span style="font-size:130%;">Login</b>
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}"><span style="font-family:'MV Boli';"><span style="font-size:140%;"><span style="color:darkturquoise;">Forgot Your Password ?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
