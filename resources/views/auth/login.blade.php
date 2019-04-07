@extends('layouts.front.masterFront')

@section('content')
<section id="home" class="main-banner parallaxie" style="background: url('{{ asset('assetsFrontend/images/bgLogin.jpg')}}')">
		<div class="heading">
        
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card"><br>
                <h4>Login<h4><hr style="border:2px solid #0984e3;width:15%">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6"><br>
		                    	<img class="img-fluid" src="{{ asset('assetsFrontend/images/logo.png')}}" alt="" />
                                <br>    
                            </div>
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 

                                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif 
                                <button type="submit" style="width:100%" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                              

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
