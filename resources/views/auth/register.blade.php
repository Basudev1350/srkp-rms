@extends('layouts.layout_navigation')
@section('userRegister')
@section('title', 'USER REGISTER')
@section('userRegister')
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
        <div class="register-box">
    <div class="card">
    <div class="card-body register-card-body">
    <div class="register-logo">
     <h3>SRKP-RMS (UI-REGISTER)</h3>
     </div>
      <p class="login-box-msg">Register a new membership</p>
      <form action="{{ route('register') }}" method="post">
      @csrf
        <div class="input-group mb-3">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="email" type="email" placeholder="Email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
          <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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
        <div class="input-group mb-3">
          <input id="password-confirm" type="password" placeholder="Retype password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-info btn-block btn-sm">
             {{ __('Register') }}
            </button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-google"></i>
          Sign up using Google
        </a>
      </div>

      <p class="text-center">Already have an account? <a href="{{ route('login') }}">login here</a></p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
</div>   
</div>
</div>
@endsection
