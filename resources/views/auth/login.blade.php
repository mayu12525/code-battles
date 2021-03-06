@extends('layouts.app')

@section('pageTitle' , 'Login')
@section('pageDescription', 'The description of the login page.')

@section('content')
    <div class="m-10 d-flex justify-content-between align-items-center h-100 auth-full-height">
        <div class="h-75 d-flex align-items-center justify-content-center" style="flex: 2">
            <!-- Registeration Form -->
            <div class="w-75">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-12 mx-auto mb-4">
                            <h1>Login to your account</h1>
                        </div>
                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email Address"
                                   class="form-control bg-white border-left-0 border-md @error('email') is-invalid @enderror"
                                   value="{{old('email')}}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password"
                                   class="form-control bg-white border-left-0 border-md @error('password') is-invalid @enderror"
                                   required autocomplete="current-password" value="{{old('password')}}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-4">
                            <button type="submit" class="btn btn-primary btn-block py-2 not-darken">
                                <span class="font-weight-bold">Login</span>
                            </button>
                        </div>

                        <div class="text-center w-100">
                            @if (Route::has('password.request'))
                                <p class="text-muted font-weight-bold">  {{ __('Forgot Your Password?') }} <a
                                        href="{{ route('password.request') }}"
                                        class="text-primary ml-2">{{__('Click Here')}}</a>
                                </p>
                            @endif
                        </div>

                        <!-- Divider Text -->
                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>

                        <!-- Social Login -->
                        <div class="form-group col-lg-12 mx-auto">
                            <a href="#" class="btn btn-primary btn-block py-2 btn-facebook not-darken"
                               style="background: #3b5998 !important; border-color: #3b5998 !important;">
                                <i class="fa fa-facebook-f mr-2"></i>
                                <span class="font-weight-bold">Continue with Facebook</span>
                            </a>
                            <a href="#" class="btn btn-dark btn-block py-2 btn-github not-darken">
                                <i class="fa fa-github mr-2"></i>
                                <span class="font-weight-bold">Continue with Github</span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-none d-lg-flex h-75 align-items-center justify-content-center mx-5" style="flex: 3">
            <img src="{{asset('/images/login_right.svg')}}" alt="inspiration for coding" class="w-100 mh-100">
        </div>
    </div>
@endsection
