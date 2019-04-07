@extends('layouts.front.masterFront')

@section('content')
<section id="home" class="main-banner parallaxie" style="background: url('{{ asset('assetsFrontend/images/bgLogin.jpg')}}')">
		<div class="heading" ><br><br>  <br>
        
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card"><br>
                <h4>Register<h4><hr style="border:2px solid #0984e3;width:15%">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                           <div class="col-md-6"><br><br>
		                    	<img class="img-fluid" src="{{ asset('assetsFrontend/images/logo.png')}}" alt="" />    
                            </div>
                            <div class="col-md-6">
                                <input id="nama" type="text" placeholder="Nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif 
                       
                                <input id="username" type="text" placeholder="Username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif 
                   
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                        
                                <input id="no_telp" type="number" placeholder="No Telp" class="form-control{{ $errors->has('no_telp') ? ' is-invalid' : '' }}" name="no_telp" value="{{ old('no_telp') }}" required>
                                @if ($errors->has('no_telp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_telp') }}</strong>
                                    </span>
                                @endif 
                       

                                <input id="status" type="hidden" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" value="User" required>
                                @if ($errors->has('status'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif 
                       
                                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif 
              
                                <input id="password-confirm" placeholder="Password Confirm" type="password" class="form-control" name="password_confirmation" required>
                
                                <button type="submit" style="width:100%" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <span style="font-size:14px">Already Have Account? <a style="color:blue" href="/login">Login here</a></span>
                            </div>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
		</div>
	</section>
@endsection