@extends('layouts.layout_navigation')
@section('resetPassword')
@section('title', 'RESET PASSWORD')
@section('resetPassword')
<div class="container">
  <div class="row">
  <div class="col-md-4 offset-md-4">
  <div class="login-box" style="margin-top: 50px;">
  <div class="login-logo">
    <a href="#"><b>SRKP-</b>RMS</a>
  </div>
  <!-- /.login-logo -->

  <div class="col-xl-12">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              {{ session('status') }}
          </div>
      @endif
   </div>
  <div class="card">
    
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
        <div class="row">
          <div class="col-12">
            <button type="submit"  class="btn btn-primary btn-block">
            {{ __('Send Password Reset Link') }}
            </button>
          </div>
          <!-- /.col -->
        </div>
      </form>
       <p class="mt-3 mb-1">
        Not have an account? <a href="{{ route('register') }}" class="text-center">register here</a>
      </p>
    </div>
    <!-- /.login-card-body -->
</div>
</div>
</div>
</div>
</div>
@endsection
