@extends('layouts.frontend.login')

@section('content')
    <form class="woocommerce-form woocommerce-form-login login" action="{{ route('login') }}" method="post">

    @csrf

        <div class="form-row mdc-text-field col-12 validate-required">
            <label class="mdc-floating-label" for="username">
                Email Address
             </label>
            <span class="woocommerce-input-wrapper">
                <input autofocus placeholder="" name="email" id="username" autocomplete="username" class="mdc-text-field__input">
            </span>

        </div>
           <div class="mt-2 form-row mdc-text-field col-12 validate-required">
            <label class="mdc-floating-label" for="username">
                Password
            </label>
            <span class="woocommerce-input-wrapper">
                <input placeholder="" type="password" name="password" id="password"  class="mdc-text-field__input"></span>

        </div>


        <p class="form-row col-12 d-block clearfix mt-2 mb-4">
        <span class="custom-control custom-checkbox d-inline-block">
                <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="41f578e52f" /><input type="hidden" name="_wp_http_referer" value="/login/" />            <input type="checkbox" class="custom-control-input" name="rememberme" type="checkbox" id="rememberme" value="forever">
                <label class="custom-control-label" for="rememberme">Remember me</label>
        </span>
        <div class="row mb-3">


            <div class="col-md-6">


                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>


        </p>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Lost your password??') }}
            </a>
        @endif
        <div class="actions">
            <button type="submit" class="btn-lg float-left btn btn-primary" name="login"
                    value="Log in">Login</button>

            <a class="btn-lg float-right btn btn-outline-secondary" name="create_an_account"
               href="register">Create an account</a>

        </div>



    </form>





@endsection
