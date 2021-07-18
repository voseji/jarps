@include('auth/head')

@extends('layouts.app')

@section('content')

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="{{ route('login') }}" method="POST" class="form-signin">
                    @csrf
						<div class="account-logo">
                        <h1>JSMS</h1>
                        </div>
                        <div class="form-group">
                        @error('email')
                                    <span class="alert alert-danger  fade show" role="alert" style="align:center">
                                        <strong>{{ $message }}</strong>
                                    </span><br/></br>
                                    <span>
                                       
                                    </span>
                                @enderror
                            <label>Username or Email</label>
                            <input id="email" type="email" autofocus="" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control">
                           
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="form-group text-right">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                            </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">
                            {{ __('Login') }}
                            </button>
                        </div>
                        
                    </form>
                </div>
			</div>
        </div>
    </div>
    @endsection