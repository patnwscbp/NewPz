@extends('layouts.logincss')

@section('content')
<div class="container">  
    <div class="row">
          <div class="content">
              <img src="{{ asset('img/pz.png') }}" width="300px" >
                <div class="title m-b-md">
                   Reset Password
                </div>

        </div>    
          <div id="login">

        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

          <fieldset class="clearfix">

            <p>
                <span class="fontawesome-envelope"></span>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail" required>
                     @if ($errors->has('email'))
                        <p class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                 
                    @endif
              </p> 
            <p>
               <button type="submit" class="btn btn-primary">ส่งอีเมลล์เพื่อนรีเซ็ตรหัสผ่าน</button>
              </p>

          </fieldset>

        </form>

        

      </div>
      
        </div>
<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
