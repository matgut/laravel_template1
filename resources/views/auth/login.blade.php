@extends('auth.app_auth')

@section('section')
<form method="POST" action="{{ route('login') }}">
        @csrf
        <div id="form_right">
            <center><img src="img/system-task.png" alt="empresa icon"></center>
            <div class="input_container">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" class='input_field @error('email') is-invalid @enderror' value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('general.register_user.email_adress') }}" id="email">
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input  placeholder="{{ __('general.register_user.password') }}" type="password" name="password" id="field_password" class='input_field @error('password') is-invalid @enderror' required autocomplete="current-password" id="password" >
            </div>
            @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            <button type="submit" class="input_field" id='input_submit'>
                    {{ __('general.login') }}
            </button>
            @if (Route::has('password.request'))
                <span><a href="{{ route('password.request') }}">{{ __('general.forgot_password') }}</a></span>
            @endif
            @if (Route::has('register'))
               <span id='create_account'>
                    <a href="{{ route('register') }}">{{ __('general.create_account') }} </a>
                </span>
            @endif
        </div>
</form>

@endsection