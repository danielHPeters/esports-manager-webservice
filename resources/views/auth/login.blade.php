@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-content">
      <span class="card-title">{{ __('Login') }}</span>
      <form id="loginForm" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
        <div class="input-field">
          <label for="email">{{ __('E-Mail Address') }}</label>
          <input
            id="email"
            type="email"
            class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}"
            name="email"
            value="{{ old('email') }}"
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
        <p>
          <label for="remember">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
            <span>{{ __('Remember Me') }}</span>
          </label>
        </p>
      </form>
    </div>
    <div class="card-action">
      <button form="loginForm" type="submit" class="btn btn-flat">{{ __('Login') }}</button>
      <a class="btn btn-flat" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
    </div>
  </div>
@endsection
