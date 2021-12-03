@extends('layouts.layout_navigation')
@section('recoverPassword')
@section('title', 'RECOVER PASSWORD')
@section('recoverPassword')
<div class="container">
  <div class="row">
  <div class="col-md-4 offset-md-4">
  <div class="login-box">
  <div class="login-logo" style="margin-top:30px;">
  <a href="#"><b>SRKP-</b>RMS</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
     <form action="{{ route('password.update') }}" method="POST">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      <div class="form-group row">
        
             
      <div class="input-group mb-3">
          <input id="email" type="email" placeholder="Email" value="{{$email}}" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" readonly>
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
          <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">
            {{ __('Reset Password') }}
            </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- <p class="mt-3 mb-1">
        <a href="login.html">Login</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>
</div>
</div>
@endsection
