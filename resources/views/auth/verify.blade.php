@extends('layouts.auth')

@section('content')
  <div class="card-body login-card-body">
    <p class="login-box-msg">Verify Your Email Address</p>
    @if (Session::has('resent'))
      <p class="login-box-msg text-success">A fresh verification link has been sent to your email address.</p>
    @endif
    <form action="{{ route('verification.resend') }}" method="post"> @csrf
      <div class="row">
        <div class="col-12">
            <h6>
                {{ __('Before proceeding, please check your email for a verification link.') }}
            </h6>            
        </div>
        <div class="col-12 mt-3">
          <button type="submit" class="btn btn-primary btn-block">click here to request another</button>
        </div>
      </div>
    </form>
  </div>
@endsection
