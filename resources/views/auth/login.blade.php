@extends('layouts.user2')

@section('title')
    Store | Login
@endsection

@section('styles')
<style type="text/css">
.btn-reg {
  background-color: orange !important;
  width: 45%;
}
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 56px 0px 75px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
}
.input-log-in-marg {
  margin-top: 2%;
}
.btn-signin {
  background-color: orange !important;
  width: 64%;
}
.reg-btn-marg {
  margin-top: 3%;
}
.form-control {
  font-size: 0.7rem !important;
}
strong {
  font-size: 11px;
}
</style>
@endsection

@section('content')
<div class="container">
  <br>
<div class="row">
 
  <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>New to <span style="color:orange;">Storeup</span></h3>
            </div>
        </div>
        <div class="row reg-btn-marg">
            <div class="col-sm-12 text-center">
                <a href="{{ route('register') }}"><button class="btn btn-warning btn-reg">REGISTER NOW</button></a>
            </div>
        </div>
        <div class="row input-log-in-marg">
            <div class="col-sm-12 text-center">
                <p style="font-weight: bold; font-size: 13px;">If you are new to <span style="color:orange;">Storeup</span> please click "Register now"</p>
            </div>
        </div>
        <div class="row input-log-in-marg">
            <div class="col-sm-12 text-center">
                <img  type="image" src="<?php echo asset("natural.png")?>">
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>I'M ALREADY REGISTERED</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="{{url('/redirect')}}"><button class="loginBtn loginBtn--facebook">Sign in with Facebook</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="{{url('/redirectG')}}"><button class="loginBtn loginBtn--google">&nbsp;Sign in with Google+&nbsp;</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h5>OR</h5>
            </div>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                        
                  
                      <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">                            
                    
                        <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        @if(session('status'))
                            <span class="help-block">
                            <strong style="color:#32CD32;">{{session('status')}}</strong>
                            </span>
                        @endif
                    
                </div>
            </div>
        </div>
        <div class="row input-log-in-marg">
            <div class="col-sm-12 text-center">
                 <button type="submit" class="btn btn-warning btn-signin">LOG IN</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9 mx-auto">              
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    <p style="font-size: 12px;">Forgot Your Password?</p>
                </a>              
            </div>
        </div>
      </form>
    </div>
    <div class="col-md-1"></div>
</div>
</div>
@endsection
