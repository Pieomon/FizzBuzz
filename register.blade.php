@extends('layouts.app')
@section('title','Register - Midnight Writers Submissions')
@section('content')

@section('content')

<style>.form-group.required .control-label:after {
  content:"*";
  color:red;
} </style>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

<!--                       <div class="form-group{{ $errors->has('legal_name') ? ' has-error' : '' }} required">
 //                           <label for="legal_name" class="col-md-4 control-label">Full Name</label>
/                            <div class="col-md-6">
                                <input id="legal_name" type="text" class="form-control" name="legal_name" value="{{ old('legal_name') }}" required autofocus>
                                @if ($errors->has('legal_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('legal_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
-->
			<div class="form-group{{ $errors->has('author_name') ? ' has-error' : '' }} required">
                        <label for="author_name" class="col-md-4 control-label">Author Name </label>

                            <div class="col-md-6">
                                <input id="author_name" type="name" class="form-control" name="author_name" value="{{ old('author_name') }}" required>

                                @if ($errors->has('author_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} required">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} required">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group required">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
<!--
						<div class="form-group{{ $errors->has('paypal') ? ' has-error' : '' }}">
                            <label for="paypal" class="col-md-4 control-label">Paypal E-Mail Address (Optional)</label>
                            <div class="col-md-6">
                                <input id="paypal" type="email" class="form-control" name="paypal" value="{{ old('paypal') }}">
                                @if ($errors->has('paypal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
-->
                        <div class="row">
                            <div class="col">
                                &nbsp;
                            </div>
                            <div class="col">
                                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE') }}"></div>
                            </div>
                            <div class="col">
                                &nbsp;
                            </div>
                        </div>
                        <br />



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 text-right">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
