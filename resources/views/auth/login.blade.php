@extends('layouts.logincss')

@section('content')
<div id="demo-content">


        <div id="loader-wrapper">
			<div id="loader"></div>
            
			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		  </div>     
<div class="container">
       
    <div class="row">
          <div class="content">
              <img src="{{ asset('img/pz.png') }}" width="300px" >
                <div class="title m-b-md">
                   Customer Service
                </div>

        </div>    
          <div id="login">

        <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
            <p>
                <span class="fa fa-envelope-o"></span>
                <input  type="email"  name="email" value="{{ old('email') }}" placeholder="E-mail" required >
            </p>
            <p><span class="fa fa-lock"></span>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
            </p>
             <p>
                @if ($errors->has('email'))
             <p class="help-block">
                     <strong>{{ $errors->first('email') }}</strong>
                   
                @endif
                @if ($errors->has('password'))
            <p class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                @endif 
              </p> 
            <p>
                <input type="submit" value="Sign In">
                <a href="redirect" class="btn btn-primary">Login Facrbook</a>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password? </a>
              </p>

        </form>

        <p>Not a member? <a href="{{ route('register') }}">Sign up now</a><span class="fontawesome-arrow-right"></span></p>

      </div>
      
        </div>
    </div>    
@endsection
