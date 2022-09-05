@extends('layouts.auth')

@section('content')
  <div class="card-body login-card-body">
    <p class="login-box-msg">Please enter the email id to rest your password.</p>
    @if (Session::has('status'))
      <p class="login-box-msg text-success">{{ Session::get('status') }}</p>
    @endif
    <form action="{{ route('password.email') }}" method="post">@csrf
      <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Request new password</button>
        </div>
      </div>
    </form>
    <p class="mt-3 mb-1">
      <a href="{{ route('login') }}">Login</a>
    </p>
    <p class="mb-0">
      <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
    </p>
  </div>
@endsection
