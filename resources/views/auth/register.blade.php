 <div class="col-lg-6 col-md-6">
    <div class="account_form register">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <p>
                <label>{{ __('First Name') }}<span>*</span></label>
                <input id="first_name" type="text" @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </p>
            <p>
                <label>{{ __('Last Name') }}<span>*</span></label>
                <input id="last_name" type="text" @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </p>
            <p>
                <label>{{ __('E-Mail Address') }}<span>*</span></label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </p>
             <p>
                <label>{{ __('Address') }}<span>*</span></label>
                <input id="address" type="text" @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </p>
             <p>
                <label>{{ __('Password') }}<span>*</span></label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </p>
             <p>
                <label>{{ __('Confirm Password') }}<span>*</span></label>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </p>
            <div class="login_submit">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</div>
