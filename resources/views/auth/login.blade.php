@extends('auth.app')

@section('auth_content')

<div class="row align-items-center justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="login-signup-wrap p-5 gray-light-bg rounded shadow">
            <div class="login-signup-header text-center">
                <a href="index.html"><img src="{{ asset('frontend/img/logo/reg_logo.png') }}" class="img-fluid mb-3" alt="Logo"></a>
                <h4 class="mb-5">Login Your Account</h4>
            </div>

            <form method="POST" action="{{ route('login') }}" class="login-signup-form">
                @csrf
                <div class="form-group">
                    <!-- Label -->
                    <label class="pb-1" for="email">Email Address</label>
                    <!-- Input group -->
                    <div class="input-group input-group-merge">
                        <div class="input-icon">
                            <span class="ti-email"></span>
                        </div>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@address.com">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <!-- Label -->
                    <label class="pb-1" for="password">Password</label>
                    <!-- Input group -->
                    <div class="input-group input-group-merge">
                        <div class="input-icon">
                            <span class="ti-lock"></span>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-block btn-brand-02 border-radius mt-4 mb-3">
                    Login Now
                </button>
            </form>
            {{-- <div class="other-login-signup my-3">
                <div class="or-login-signup text-center">
                    <strong>Or Login With</strong>
                </div>
            </div>
            <ul class="list-inline social-login-signup text-center">
                <li class="list-inline-item my-1">
                    <a href="#" class="btn btn-facebook"><i class="fab fa-facebook-f pr-1"></i> Facebook</a>
                </li>
                <li class="list-inline-item my-1">
                    <a href="#" class="btn btn-google"><i class="fab fa-google pr-1"></i> Google</a>
                </li>
                <li class="list-inline-item my-1">
                    <a href="#" class="btn btn-twitter"><i class="fab fa-twitter pr-1"></i> Twitter</a>
                </li>
            </ul> --}}
            <!--<p class="text-center mb-0">Don't have an account? <a href="{{ route('register') }}">Register</a></p>-->
        </div>
    </div>
</div>
            
@endsection
