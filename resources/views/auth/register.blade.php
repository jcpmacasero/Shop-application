@extends('layouts.user2')

@section('title')
    Store | Register
@endsection

@section('styles')
<style type="text/css">
.btn-signup {
  background-color: orange !important;
  width: 80%;
}
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 85px 0px 107px;
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
.jumbotron label {
  font-size: 11px;
  margin-bottom: .1rem !important;
}
.form-control {
  font-size: 0.7rem !important;
}
.jumbotron {
    padding: 2.5rem 9rem;
}
.form-group {
    margin-bottom: 0.5rem !important;
}
</style>
@endsection

@section('content')
<div class="container">
  <div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
              <div class="col-sm-12">
                  <h3>Create your <span style="color:orange;">Storeup</span> Account</h3>
              </div>
            </div>
            <div class="container" style="margin-top: 2%;">
              <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                <div class="row">                  
                  <div class="col-sm-12">
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="row">
                          <div class="col-sm-11">
                          <label for="name" class="control-label">Full Name*</label>
                          </div>
                        </div>
                          <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="First & Last name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                          </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="row">
                          <div class="col-sm-11">
                          <label for="name" class="control-label">E-Mail Address*</label>
                          </div>
                        </div>
                          <div class="col-md-10">
                                <input id="email" placeholder="Please enter your e-mail" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="row">
                          <div class="col-sm-11">
                          <label for="name" class="control-label">Password*</label>
                          </div>
                        </div>
                          <div class="col-md-10">
                                <input id="password" placeholder="Please type your password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="row">
                          <div class="col-sm-11">
                          <label for="name" class="control-label">Confirm Password*</label>
                          </div>
                        </div>
                          <div class="col-md-10">
                                <input id="password-confirm" placeholder="Please retype your password" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                        <div class="row">
                          <div class="col-sm-11">
                          <label for="name" class="control-label">Birthday</label>
                          </div>
                        </div>
                          <div class="col-md-10">
                                <div class="row">
                                    <div class="col-xs-4"> 
                                    <select class="form-control col-xs-4" size="1" id="month" name="month" required>
                                        <option>Month</option>
                                        <option value="Jan">Jan</option>
                                        <option value="Feb">Feb</option>
                                        <option value="Mar">Mar</option>
                                        <option value="Apr">Apr</option>
                                        <option value="May">May</option>
                                        <option value="Jun">Jun</option>
                                        <option value="Jul">Jul</option>
                                        <option value="Aug">Aug</option>
                                        <option value="Sep">Sep</option>
                                        <option value="Oct">Oct</option>
                                        <option value="Nov">Nov</option>
                                        <option value="Dec">Dec</option>
                                    </select>
                                    </div>
                                
                                    <div class="col-xs-4">                      
                                    <select class="form-control col-xs-4" size="1" id="day" name="day" required>
                                        <option>Day</option>
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    </div>

                                    <div class="col-xs-4">
                                    <select class="form-control col-xs-4" size="1" id="year" name="year" required>
                                        <option>Year</option>
                                        <?php 
                                        $firstYear = (int)date('Y') - 95;
                                        $lastYear = $firstYear + 95;
                                        for($i=$firstYear;$i<=$lastYear;$i++)
                                        {
                                            echo '<option value='.$i.'>'.$i.'</option>';
                                        }
                                        ?>
                                    </select>
                                    </div>
                            </div>
                              @if ($errors->has('birthdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif 
                          </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        <div class="row">
                          <div class="col-sm-11">
                          <label for="name" class="control-label">Gender</label>
                          </div>
                        </div>
                          <div class="col-md-10">
                                <label class="radio-inline"><input type="radio" value="Male" name="gender">Male</label>
                                <label class="radio-inline"><input type="radio" value="Female" name="gender">Female</label>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                          </div>
                      </div>
                  </div>
                </div>

                <div class="row" style="margin-top: 1%;">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-warning btn-signup">SIGN UP</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p style="font-size: 11px; word-spacing: 4px;">By clicking "SIGN UP" I agree to <span style="color:orange;">Storeup</span> Privacy Policy</p>
                    </div>
                </div>
              </form>
            </div>            
        </div>
        <div class="col-md-6">  
            <div class="row" style="margin-top: 10%;">
                <div class="col-sm-12 text-center">
                    <h3>Or sign up with:</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="{{url('/redirect')}}"><button class="loginBtn loginBtn--facebook">Sign in with Facebook</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12  text-center">
                    <a href="{{url('/redirectG')}}"><button class="loginBtn loginBtn--google">Sign in with &nbsp;Google+&nbsp;</button></a>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
