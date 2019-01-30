@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-content">
      <span class="card-title">{{ __('Register') }}</span>
      <form id="registerForm" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-field">
          <label for="name">{{ __('Name') }}</label>
          <input
            id="name"
            type="text"
            class="validate{{ $errors->has('name') ? ' is-invalid' : '' }}"
            name="name"
            value="{{ old('name') }}"
            required
            autofocus
          />
          @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>

        <div class="input-field">
          <label for="email">{{ __('E-Mail Address') }}</label>
          <input
            id="email"
            type="email"
            class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}"
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
          <input id="passwordConfirm" type="password" name="password_confirmation" required>
        </div>
      </form>
    </div>
    <div class="card-action">
      <button form="registerForm" type="submit" class="btn btn-flat">{{ __('Register') }}</button>
    </div>
  </div>
@endsection
