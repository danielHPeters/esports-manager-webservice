@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-content">
      <span class="card-title">{{ __('Reset Password') }}</span>
      @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
      @endif

      <form id="sendResetForm" method="POST" action="{{ route('password.email') }}"
            aria-label="{{ __('Reset Password') }}">
        @csrf
        <div class="input-field">
          <label for="email">{{ __('E-Mail Address') }}</label>
          <input
            id="email"
            type="email"
            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
            name="email"
            value="{{ old('email') }}"
            required
          />

          @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
      </form>
    </div>
    <div class="card-action">
      <button form="sendResetForm" type="submit" class="btn btn-flat">{{ __('Send Password Reset Link') }}</button>
    </div>
  </div>
@endsection
