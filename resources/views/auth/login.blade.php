@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 50px">
    <div class="customer_login">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="account_form login">
                    <h2>login</h2>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <p>
                            <label>{{ __('E-Mail Address') }}<span>*</span></label>
                            <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                         </p>
                         <p>
                            <label>{{ __('Password') }}<span>*</span></label>
                            <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                         </p>
                        <div class="login_submit">
                           @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <label for="remember">
                                <input id="remember" type="checkbox">
                                {{ __('Remember Me') }}
                            </label>
                            <button type="submit">login</button>
                        </div>
                    </form>
                 </div>
            </div>
            @include('auth/register')
    </div>
</div>
@endsection
