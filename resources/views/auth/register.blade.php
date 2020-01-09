@extends('auth.app_auth')

@section('section')

        <!-- /.card-header -->
        <!-- form start -->
    <div class="form_right">
        <center><img src="../img/system-task.png" alt="empresa icon"></center>  
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                        <center><h3 class="text-dark">{{ __('general.register_user.resgister_msg') }}</h3></center>
                </div>
                <div class="form-group">
                    <div class="input_container">
                        <i class="fas fa-user"></i>
                        <input id="name" type="text" class="input_field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('general.register_user.name') }}" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input_container">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" class="input_field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('general.register_user.email_adress') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="input_container">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" class="input_field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder={{ __('general.register_user.password') }}>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                        <div class="input_container">
                            <i class="fas fa-lock"></i>
                            <input id="password-confirm" type="password" class="input_field" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('general.register_user.confirm_password') }}">
                        </div>
                    </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-9">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label>
                                    <a href="#">{{ __('general.register_user.term') }}</a>
                                </label>
                            </div>     
                        </div> 
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary btn-block">
                            {{ __('general.register_user.resgister') }}
                            </button>
                        </div>   
                    </div>
                </div>
          </div>
          </div>
        </form>
        </div>
    </div>

@endsection

