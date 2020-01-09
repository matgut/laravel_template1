@extends('auth.app_auth')

@section('section')
    <div class="container p-5">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <center><img src="../img/system-task.png" alt="empresa icon"></center>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <p class="login-box-msg">{{ __('general.reset.forgot_password_msg') }}</p>
                </div>
                <div class="form-group">
                    <div class="input_container">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" class="input_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder={{ __('general.register_user.email_adress') }} autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
    
            </div>
            <!-- /.card-header -->
              <!-- /.card-body -->
    
              <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">
                            {{ __('general.reset.send_link') }}
                    </button>
              </div>
            </form>
    </div>

@endsection
