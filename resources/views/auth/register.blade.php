@extends('layouts.logincss')

@section('content')
<div class="container">
    <div class="row">
        <div class="content">
              <img src="{{ asset('img/pz.png') }}" width="300px" >
                <div class="title m-b-md">
                   สมัครสมาชิกเพื่อใช้บริการ
                </div>

        </div>
            <div id="login">
                    <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <p>
                            <span class="fa fa-user"></span>
                            <input id="name" type="text"  name="name" value="{{ old('name') }}"placeholder="Name" required autofocus>
                                @if ($errors->has('name'))
                                    <p class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </p>
                                @endif
                       
                            <span class="fa fa-envelope-o"></span>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail" required>
                                @if ($errors->has('email'))
                                    <p class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </p>
                                @endif
                       
                        
                            <span class="fa fa-lock"></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <p class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </p>
                                @endif
                       
                      
                            <span class="fa fa-lock"></span>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                        
                        
                        <p>
                            <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                        </p>
                        
                    </form>
              
        </div>
    </div>
</div>
@endsection
