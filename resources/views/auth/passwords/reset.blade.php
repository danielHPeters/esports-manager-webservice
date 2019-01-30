@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-content">
      <span class="card-title">{{ __('Reset Password') }}</span>
      <form id="resetForm" method="POST" action="{{ route('password.request') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="input-field">
          <label for="email">{{ __('E-Mail Address') }}</label>
          <input
            id="email"
            type="email"
            class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}"
            name="email" value="{{ $email ?? old('email') }}"
            required
            autofocus
          />
          @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-field">
          <label for="password">{{ __('Password') }}</label>
          <input
            id="password"
            type="password"
            class="validate{{ $errors->has('password') ? ' is-invalid' : '' }}"
            name="password"
            required
          />
          @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>

        <div class="input-field">
          <label for="passwordConfirm">{{ __('Confirm Password') }}</label>
          <input
            id="passwordConfirm"
            type="password"
            name="password_confirmation"
            required
          />
        </div>
      </form>
    </div>
    <div class="card-action">
      <button form="resetForm" type="submit" class="btn btn-flat">{{ __('Reset Password') }}</button>
    </div>
  </div>
@endsection
