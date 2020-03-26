@extends('layouts.auth')
@section('header')
<h1 class="text-white">Welcome!</h1>
<p class="text-lead text-light">
    Please fill in the form below to login.
</p>
@endsection
@section('content')
<!-- Page content -->
<div class="container mt--8 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary shadow border-0">
                {{-- <div class="card-header bg-transparent pb-5">
                    <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                    <div class="btn-wrapper text-center">
                        <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img
                                    src="{{ asset('dashboard/assets/img/icons/common/fb.png') }}"></span>
                <span class="btn-inner--text">facebook</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon"><img
                            src="{{ asset('dashboard/assets/img/icons/common/google.svg') }}"></span>
                    <span class="btn-inner--text">Google</span>
                </a>
            </div>
        </div> --}}
        <div class="card-body px-lg-5 py-lg-5">
            {{-- <div class="text-center text-muted mb-4">
                        <small>Or sign in with credentials</small>
                    </div> --}}
            <form role="form" method="POST" action="{{ route('login') }} " class="login-form">
                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input name="remember" class="custom-control-input" id=" customCheckLogin" type="checkbox"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for=" customCheckLogin">
                        <span class="text-muted">Remember me</span>
                    </label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Sign in</button>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <a href="{{ url('/password/reset') }}" class="text-light"><small>Forgot password?</small></a>
        </div>
        <div class="col-6 text-right">
            <a href="{{ url('/register') }}" class="text-light"><small>Create new account</small></a>
        </div>
    </div>
</div>
</div>
</div>
@endsection