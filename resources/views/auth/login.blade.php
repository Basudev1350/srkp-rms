@extends('layouts.layout_navigation')
@section('userLogin')
@section('title', 'USER LOGIN')
<div class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
      <a href="#"><b>SRKP-</b>RMS (USER-LOGIN)</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
  
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{ old('password') }}" required autocomplete="password" autofocus>
           @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
            @enderror
          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-info btn-block btn-sm">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

  
        <p class="mb-1 mt-3">
          Forgot your password? 
          <a href="{{ route('password.request') }}">change it here</a>
        </p>
        <p class="mb-0">
          Nothave an account with us? 
          <a href="/register" class="text-center">Register Now</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</div>
@endsection
